<?php

use Illuminate\Http\Request;
use App\Curso;
use App\Usuario;

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

use Illuminate\Http\Request;
use App\Disciplina;

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

Route::get('/listar/usuario', 'Administradorcontroller@listar');
Route::get('/cadastrar/usuario', 'Administradorcontroller@cadastrar');
Route::post('/adcionar/usuario', 'Administradorcontroller@adcionar');
Route::get('/editar/usuario/{id}', 'Administradorcontroller@editar');
Route::post('/atualizar/usuario', 'Administradorcontroller@atualizar');
Route::get('/remover/usuario/{id}', 'Administradorcontroller@remover');

