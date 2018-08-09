<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\SimuladoValidator;
use App\Validator\MontarSimuladoValidator;
use App\Validator\ValidationException;


class SimuladoController extends Controller
{
    //
    public function adicionar(Request $request){
        try{
            SimuladoValidator::Validate($request->all());
            //sql pegar qtd questaos da disciplinas
            $simulado = new \App\Simulado();
            $simulado->fill($request->all());
            $simulado->save();
            return redirect("listar/simulado");
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/simulado")->withErrors($ex->getValidator())->withInput();
        }
    }

    public function cadastrar(){
    	$cursos = \App\Curso::all();
        $usuarios = \App\Usuario::all();
        $disciplinas = \App\Disciplina::all();
    	return view('/SimuladoView/cadastrarSimulado', ['cursos' => $cursos, 'usuarios' => $usuarios, 'disciplinas' => $disciplinas]);
    }



    public function listar(){
    	$simulados = \App\Simulado::all();
    	return view('/SimuladoView/listaSimulado', ['simulados' => $simulados]);
    }

    public function editar(Request $request){
    	$simulado= \App\Simulado::find($request->id);
        $cursos = \App\Curso::all();
        $usuarios = \App\Usuario::all();
    	return view ('/SimuladoView/editarSimulado', ['simulado' => $simulado, 'cursos' => $cursos, 'usuarios' => $usuarios]);
    }

    public function atualizar(Request $request){
        try{
            SimuladoValidator::Validate($request->all());

            $simulado = \App\Simulado::find($request->id);
            $simulado->fill($request->all());
            $simulado->update();
            return redirect("listar/simulado");
        }
        catch(ValidationException $ex){
            return redirect("editar/simulado")->withErrors($ex->getValidator())->withInput();
        }
    }

//Quando e se cezar terminar o controlo de acesso, nois iremos instaciar disciplinas pelo curso do usuario atual(coordenador)
    public function montar(Request $request){

      
        $disciplinas = \App\Disciplina::all();
        //$questaos = \App\QuestaoSimulado::where('simulado_id', '=', $request->id)->get();
        $questaos = \DB::table('questao_simulados')
            ->join('questaos', 'questao_simulados.questao_id', '=', 'questaos.id')
            ->select('questaos.*', 'questao_simulados.*')
            ->where('simulado_id', '=', $request->id)
            ->get();

        return view('montar',['disciplinas' => $disciplinas, 'questaos' => $questaos, 'simulado_id'=> $request->id]);     
        
     
    }

    public function cadastrarQuestao(Request $request){

          try{

        $questaos = \App\Questao::where([['dificuldade', '=', $request->dificuldade],
                                         ['disciplina_id', '=', $request->disciplina_id]])
                                        ->get()->toArray();
       
        $num_questao = \App\QuestaoSimulado::where('simulado_id', '=', $request->simulado_id)->get();

        $cachorro = count($num_questao);

        MontarSimuladoValidator::Validate(count($questaos), $request->numero);

        if(($cachorro + $request->numero) > 30){
            return redirect('/montar/simulado/'.$request->simulado_id);
        }

        shuffle($questaos); 
        $row = [];

        for($i = 0; $i < $request->numero; $i++){
            $row = $questaos[$i];
            $questao = new \App\QuestaoSimulado();
            $questao->questao_id = $row['id'];
            $questao->simulado_id = $request->simulado_id;
            $questao->save();
        }
        return redirect('/montar/simulado/'.$request->simulado_id);

        }catch(ValidationException $ex){
            return redirect("/montar/simulado/".$request->simulado_id)->withErrors($ex->getValidator())->withInput();
        }
  
                  

        
    }
   
    public function responder(Request $request){

        $usuario = \Auth::user()->id;

        $resposta = new \App\Resposta();
        $resposta->questao_id = $request->questao_id;
        $resposta->alternativa_questao = $request->alternativa;
        $resposta->aluno_id = $usuario;
        $resposta->save();

        return redirect('/questao/simulado/'.$request->simulado_id);
    
    }
    public function questao(Request $request){

        $simulado = \App\Simulado::find($request->id);

        //Id do usuário
        $usuario = \Auth::user()->id;

        $questaos = \DB::table('questao_simulados')
            ->whereNotIn('questao_id',function($query) use ($usuario){
                $query->select('questao_id')->from('respostas')->where('respostas.aluno_id','=',$usuario);
            })
            ->where('simulado_id', '=', $request->id)
            ->join('questaos', 'questao_simulados.questao_id', '=', 'questaos.id')
            ->select('*')
            ->get()->toArray();

            
        if (empty($questaos)){
            return redirect('/resultado/simulado/'.$request->id);
        }
        $array = (array) $questaos[0];
        return view('/SimuladoView/questaoSimulado',['questao'=> $array, 'simulado_id'=>$request->id]);

    }
    public function resultado(Request $request){

        //Id do usuário
        $usuario = \Auth::user()->id;

        $questaos = \DB::table('questao_simulados')
            ->join('respostas', 'respostas.questao_id','=','questao_simulados.questao_id')
            ->join('questaos', 'questaos.id','=','questao_simulados.questao_id')
            ->where([['respostas.aluno_id', '=', $usuario], ['questao_simulados.simulado_id','=',$request->id]])
            ->get()->toArray();
      
        $resultado = 0;

        $count = count($questaos);



        foreach ($questaos as $questao) {
            
            if($questao->alternativa_questao == $questao->alternativa_correta)
            {
                
                $resultado += 1;
            }

        }
        return view('/SimuladoView/resultadoSimulado',['resultado' => $resultado, 'count' => $count]);
    }
    public function remover(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->delete();
    	return redirect('listar/simulado');
    }
}
