<?php

namespace SimuladoENADE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimuladoENADE\Validator\QuestaoValidator;
use SimuladoENADE\Validator\ValidationException;

class QuestaoController extends Controller
{
    public function adicionar(Request $request){
        try{
            QuestaoValidator::Validate($request->all());
            $questao = new \SimuladoENADE\Questao();
            $questao->fill($request->all());
            $questao->save();
            $user =  \Auth::user();
            if($user->tipousuario_id == 3){
                return redirect("listar/questao");
            }
            elseif($user->tipousuario_id == 2){
                return redirect("listar/questaoCoordenador");
            }
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/questao")->withErrors($ex->getValidator())->withInput();

        }

    }

    public function cadastrar(){
    	$disciplinas = \SimuladoENADE\Disciplina::all(); 
        $user =  \Auth::user();
        if($user->tipousuario_id == 3){
            return view('/QuestaoView/cadastrarQuestao', ['disciplinas' => $disciplinas]);    
        } 
        elseif ($user->tipousuario_id == 2) {

             return view('/QuestaoView/cadastrarQuestaoCoordenador', ['disciplinas' => $disciplinas]);
         } 
        
        
    	

    }
    
    public function listar(){
        
    	
        $user =  \Auth::user();
        
        $disciplinas = \SimuladoENADE\Disciplina::where('curso_id', '=', $user->curso_id)->get();
        #dd($disciplinas);
        $questao = \SimuladoENADE\Questao::where('disciplina_id','=',  $disciplinas );
        if($user->tipousuario_id == 3){
            return view('/QuestaoView/listaQuestao', ['questaos' => $questao]);   
        }
        elseif ($user->tipousuario_id == 2) {
             return view('/QuestaoView/listaQuestaoCoordenador', ['questaos' => $questao]);   
         } 
         
    	
    }

    public function editar(Request $request){
        $questao = \SimuladoENADE\Questao::find($request->id);
        $disciplinas = \SimuladoENADE\Disciplina::all();
        $user =  \Auth::user();
        if($user->tipousuario_id == 3){
                return view('/QuestaoView/editarQuestaos', ['questao' => $questao], ['disciplinas'=>$disciplinas]);  
        }
        elseif ($user->tipousuario_id == 2) {
                return view('/QuestaoView/editarQuestaosCoordenador', ['questao' => $questao], ['disciplinas'=>$disciplinas]);
        }
    }

    public function atualizar(Request $request){
        try{
            QuestaoValidator::Validate($request->all());
            $questao = \SimuladoENADE\Questao::find($request->id);
            $questao->fill($request->all());
            $questao->update();
            return redirect("listar/questao");
        }
        catch(ValidationException $ex){
            return redirect("editar/questao")->withErrors($ex->getValidator())->withInput();

        }

    }


    public function remover(Request $request){
        $questao = \SimuladoENADE\Questao::find($request->id);
        $questao->delete();
        $user =  \Auth::user();
        if($user->tipousuario_id == 3){
            return redirect('\listar\questao');
        }
        elseif($user->tipousuario_id == 2){
            return redirect('\listar\questaoCoordenador');
        }
    }
    
    public function filtro_disciplina_dificuldade(Request $request){
        $questaos = \SimuladoENADE\Questao::where([['dificuldade', '=', $request->dificuldade],
                                         ['disciplina_id', '=', $request->disciplina_id]])
                                        ->get()->toArray();
        var_dump($questaos);
        exit();

        return json_encode($questaos);
    }

       public function filtro_curso_questao(Request $request){
        $questaos = \SimuladoENADE\Questao::where([['curso_id', '=', $request->curso_id]])
                                        ->get()->toArray();
        var_dump($questaos);
        exit();

        return json_encode($questaos);
    }

}
