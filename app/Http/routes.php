<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::resource('usuarios', 'UsuarioController');
    Route::get('users/{id}/destroy',[
            'uses'=>'UsuarioController@destroy', 
            'as'=> 'admin.usuarios.destroy'
         ]);
    
 });