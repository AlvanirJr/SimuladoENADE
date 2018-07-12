<?php
use Illuminate\Http\Request;
use App\Curso;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar/Cursos','Cursocontroller@listar');
Route::post('/adicionar/Cursos','Cursocontroller@adicionar');
route::get('/cadastrar/Cursos', 'Cursocontroller@cadastrar');
Route::get('/editar/Cursos/{id}', 'Cursocontroller@editar');
Route::get('/remover/Cursos/{id}', 'Cursocontroller@remover');
Route::post('/atualizar/Cursos','Cursocontroller@atualizar');
