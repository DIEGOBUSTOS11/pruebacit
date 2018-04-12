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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/imagenes', 'ImagenesController@index')
->name('imagen.index'); 


Route::get('/imagenes/{imagen}', 'ImagenesController@show')
->where ('imagen', '[0-9]+')
->name('imagen.show'); 
 
Route::get('/imagenes/nuevo','ImagenesController@create') // get imagenes  solicitar y obtener informacion
->name('imagen.create'); 

Route:: post('/imagenes','ImagenesController@store'); // post imagenes/crear  enviar y procesar informacion

Route::get('/imagenes/{imagen}/editar','ImagenesController@edit')
->name('imagen.edit');

Route::put('/imagenes/{imagen}','ImagenesController@update');


Route::delete('/imagenes/{imagen}' , 'ImagenesController@destroy')
->name('imagen.destroy');




//VIDEOS


Route::get('/videos', 'VideosController@index')
->name('video.index'); 

Route::get('/videos/{video}', 'VideosController@show')
->where ('video', '[0-9]+')
->name('video.show'); 
 
Route::get('/videos/nuevo','VideosController@create') // get videos  solicitar y obtener informacion
->name('video.create'); 

Route:: post('/videos','VideosController@store'); // post videos/crear  enviar y procesar informacion

Route::get('/videos/{video}/editar','VideosController@edit')
->name('video.edit');

Route::put('/videos/{video}','VideosController@update');


Route::delete('/videos/{video}' , 'VideosController@destroy')
->name('video.destroy');

//COMENTARIO imagenes

Route::get('/comentarios/{imagen}', 'ComentariosController@index')
->name('comentario.index'); 
 
Route::get('/comentario/nuevo/{imagen}','ComentariosController@create')
->name('comentario.create'); 

Route:: post('/comentario/{imagen}','ComentariosController@store')->name('comentario.store');

Route::delete('/comentario/{comentario}/{imagen}' , 'ComentariosController@destroy')
->name('comentario.destroy');

//comentarios videos

Route::get('/comentariosv/{video}', 'ComentariosController@index2')
->name('comentario.index2'); 
 
Route::get('/comentariov/nuevo/{video}','ComentariosController@create2')
->name('comentario.create2'); 

Route:: post('/comentariov/{video}','ComentariosController@store2')->name('comentario.store2');

Route::delete('/comentariov/{comentario}/{video}' , 'ComentariosController@destroy2')
->name('comentario.destroy2');



