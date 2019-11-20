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

//use Symfony\Component\Routing\Route;

//use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('search');
});
Route::get('/admin', function () {
    return redirect('word');
});
Auth::routes();
Route::get('/word','AdminController@getlistword');
Route::get('/addword','LangController@AddWord');
Route::post('/postword','AdminController@postWord');
Route::get('/edit_word/{id}','AdminController@edit');
Route::post('update_word','AdminController@updateWord');
Route::get('/del_word/{id}','AdminController@del_word');
Route::get('/home', 'HomeController@index')->name('home');

