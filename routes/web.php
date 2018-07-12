<?php

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