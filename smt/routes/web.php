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

Route::get('/', 'SearchController@home');
Route::get('/s', 'SearchController@getsearch');

Route::get('/admin', function () {
    return redirect('home');
});
Auth::routes(['verify' => true, 'register' => false]);
//Auth::routes();
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');
Route::get('/word','AdminController@getlistword');
Route::get('/lang','LangController@show_list_lang');
Route::get('/addlang','LangController@Addlang');
Route::get('/addword','LangController@AddWord');
Route::post('/postword','AdminController@postWord');
Route::post('/postlang','LangController@postLang');
Route::get('/edit_word/{id}','AdminController@edit');
Route::get('/edit_lang/{id}','LangController@edit');
Route::post('updatelang','LangController@updateLang');
Route::post('update_word','AdminController@updateWord');
Route::get('/del_word/{id}','AdminController@del_word');
Route::get('/del_lang/{id}','LangController@del_lang');
Route::get('/home', 'HomeController@index')->name('home');

