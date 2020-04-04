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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/liste/{n}' , function($n) {
    return view('liste' )->with('numero',$n);
});
Route::get('/liste/{n}' , function($n) {
    return view('v')->with('numero',$n);
});*/
Route::get('/',function(){
    return view('index');
});
Route::get('/matiere','MatController@index');
Route::get('/epreuve','epreuvecontroller@index');
Route::GET('/a','MatController@store');

