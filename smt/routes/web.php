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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin','AdminController@getlistword');
Route::get('/addword','LangController@AddWord');
Route::post('/postword','AdminController@postWord');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

