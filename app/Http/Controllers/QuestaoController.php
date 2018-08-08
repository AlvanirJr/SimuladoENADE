<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Validator\QuestaoValidator;
use App\Validator\ValidationException;

class QuestaoController extends Controller
{
    public function adicionar(Request $request){
        try{
            QuestaoValidator::Validate($request->all());
            $questao = new \App\Questao();
            $questao->fill($request->all());
            $questao->save();
            return redirect("listar/questao");
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/questao")->withErrors($ex->getValidator())->withInput();

        }

    }

    public function cadastrar(){
    	$disciplinas = \App\Disciplina::all();
    	return view('/QuestaoView/cadastrarQuestao', ['disciplinas' => $disciplinas]);

    }
    
    public function listar(){
    	$questao = \App\Questao::all();
    	return view('/QuestaoView/listaQuestao', ['questaos' => $questao]);
    }

    public function editar(Request $request){
        $questao = \App\Questao::find($request->id);
        $disciplinas = \App\Disciplina::all();
        return view('/QuestaoView/editarQuestaos', ['questao' => $questao], ['disciplinas'=>$disciplinas]);
    }

    public function atualizar(Request $request){
        $questaos = \App\Questao::find($request->id);
        $questaos->enuciado = $request->enuciado;
        $questaos->alternativa_a = $request->alternativa_a;
        $questaos->alternativa_b = $request->alternativa_b;
        $questaos->alternativa_c = $request->alternativa_c;
        $questaos->alternativa_d = $request->alternativa_d;
        $questaos->alternativa_e = $request->alternativa_e;
        $questaos->alternativa_correta = $request->alternativa_correta;
        $questaos->dificuldade = $request->dificuldade;
        $questaos->disciplina_id = $request->disciplina_id;
        $questaos->update();
        return redirect('\listar\questao');

    }

    public function remover(Request $request){
        $questao = \App\Questao::find($request->id);
        $questao->delete();
        return redirect('\listar\questao');
    }
    
    public function filtro_disciplina_dificuldade(Request $request){
        $questaos = \App\Questao::where([['dificuldade', '=', $request->dificuldade],
                                         ['disciplina_id', '=', $request->disciplina_id]])
                                        ->get()->toArray();
        var_dump($questaos);
        exit();

        return json_encode($questaos);
    }

}
