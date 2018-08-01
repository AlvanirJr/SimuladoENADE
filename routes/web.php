<?php

use Illuminate\Http\Request;
use App\Curso;
use App\Usuario;
use App\Disciplina;
use App\Questao;
use App\Aluno;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::middleware('auth')->group(function(){

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar/Disciplinas','DisciplinaController@listar');
Route::get('/cadastrar/Disciplina','DisciplinaController@cadastrar');
Route::post('/adicionar/Disciplina','DisciplinaController@adicionar');
Route::get('/editar/Disciplina/{id}','DisciplinaController@editar');
Route::post('/atualizar/Disciplina','DisciplinaController@atualizar');
Route::get('/remover/Disciplina/{id}','DisciplinaController@remover');

Route::get('/listar/Cursos','Cursocontroller@listar');
Route::post('/adicionar/Cursos','Cursocontroller@adicionar');
Route::get('/cadastrar/Cursos', 'Cursocontroller@cadastrar');
Route::get('/editar/Cursos/{id}', 'Cursocontroller@editar');
Route::get('/remover/Cursos/{id}', 'Cursocontroller@remover');
Route::post('/atualizar/Cursos','Cursocontroller@atualizar');


Route::get('/listar/ciclo', 'Ciclocontroller@listar');
Route::get('/cadastrar/ciclo', 'Ciclocontroller@cadastrar');
Route::post('/adicionar/ciclo', 'Ciclocontroller@adicionar');
Route::get('/editar/ciclo/{id}', 'Ciclocontroller@editar');
Route::post('/atualizar/ciclo', 'Ciclocontroller@atualizar');
Route::get('/remover/ciclo/{id}', 'Ciclocontroller@remover');

Route::get('/listar/questao', 'QuestaoController@listar');
Route::get('/cadastrar/questao', 'QuestaoController@cadastrar');
Route::post('/adicionar/questao', 'QuestaoController@adicionar');
Route::get('/editar/questao/{id}', 'QuestaoController@editar');
Route::post('/atualizar/questao', 'QuestaoController@atualizar');
Route::get('/remover/questao/{id}', 'QuestaoController@remover');

Route::get('/listar/usuario', 'Administradorcontroller@listar');
Route::get('/cadastrar/usuario', 'Administradorcontroller@cadastrar');
Route::post('/adcionar/usuario', 'Administradorcontroller@adcionar');
Route::get('/editar/usuario/{id}', 'Administradorcontroller@editar');
Route::post('/atualizar/usuario', 'Administradorcontroller@atualizar');
Route::get('/remover/usuario/{id}', 'Administradorcontroller@remover');

Route::get('/listar/aluno', 'AlunoController@listar');
Route::get('/cadastrar/aluno', 'AlunoController@cadastrar');
Route::post('/adicionar/aluno', 'AlunoController@adicionar');
Route::get('/editar/aluno/{id}', 'AlunoController@editar');
Route::post('/atualizar/aluno', 'AlunoController@atualizar');
Route::get('/remover/aluno/{id}', 'AlunoController@remover');

Route::get('/listar/simulado', 'SimuladoController@listar');
Route::get('/cadastrar/simulado', 'SimuladoController@cadastrar');
Route::post('/adicionar/simulado', 'SimuladoController@adicionar');
Route::get('/editar/simulado/{id}', 'SimuladoController@editar');
Route::post('/atualizar/simulado', 'SimuladoController@atualizar');
Route::get('/remover/simulado/{id}', 'SimuladoController@remover')


});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

