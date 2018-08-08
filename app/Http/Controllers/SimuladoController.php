<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\SimuladoValidator;
use App\Validator\ValidationException;


class SimuladoController extends Controller
{
    //
    public function adicionar(Request $request){
        try{
            SimuladoValidator::Validate($request->all());

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
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->descricao_simulado = $request->descricao_simulado;
        $simulado->curso_id = $request->curso_id;
        $simulado->usuario_id = $request->usuario_id;
    	$simulado->update();
    	return redirect('listar/simulado');
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
        

         $questaos = \App\Questao::where([['dificuldade', '=', $request->dificuldade],
                                         ['disciplina_id', '=', $request->disciplina_id]])
                                        ->get()->toArray();
       
        $num_questao = \App\QuestaoSimulado::where('simulado_id', '=', $request->id)->get();
        if($request->dificuldade == 1){
            $request->dificuldade = "facil";
        }

        $cachorro = count($num_questao);

        if(($cachorro + $request->numero) > 30)
            return redirect('/montar/simulado/'.$request->id);
 
        shuffle($questaos);
        $row = [];
        for($i = 0; $i < $request->numero; $i++){
            $row = $questaos[$i];
            $questao = new \App\QuestaoSimulado();
            $questao->questao_id = $row['id'];
            $questao->simulado_id = $request->id;
            $questao->save();
        }
        return redirect('/montar/simulado/'.$request->id);

    }

    public function responder(Request $request){
        

    }
    


    public function remover(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->delete();
    	return redirect('listar/simulado');
    }
}
