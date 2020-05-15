<?php

use Illuminate\Support\Facades\Route;

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

Route::get('usuario', function(){
    $usuario = App\Usuario::find(1);
    echo $usuario->name;
});

Route::get('admin/{id}', function ($id) {
    // $name = App\User::find($id);
    return view('dashboard', compact('id'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('usuario', 'UsuarioController@cadastro');
   

// Rota chamados

Route::get('chamados/dashboard', 'ChamadosController@dashboard');

Route::get('chamados/search','ChamadosController@search');

Route::get('chamados/search/{activated}','ChamadosController@searchMotivo');



Route::get('cadastrar', 'ChamadosController@cadastrar');

Route::get('/','Site\SiteController@index'); 

Route::get('admin', 'Admin\AdminController@index');

Route::get('admin/categoria', 'Admin\CategoriaController@index');

Route::post('admin/categoria', function(){
    echo 'Hello';
});

