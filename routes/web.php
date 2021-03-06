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
    return view('auth.index');
})->name('index');

Route::post('/login','Auth\LoginController@login');
Route::post('/register','Auth\LoginController@register');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::group(['middleware' =>['auth']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::delete('/home/{contactus}','HomeController@destroy');
    Route::resource('/idiomas', 'IdiomaController');
    Route::resource('/proyectos','ProyectoController');
    Route::resource('/lenguajes','LenguajeController');
});

Route::post('contact-us','ContactUsController@store');
