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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@index');

//Route::get('/login', 'LoginController@view');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout' );

//Route::get('/register', 'RegisterController@view');

//Route::get('/faq', 'FaqController@view');
Route::get('/questions', 'QuestionController@index');
//Route::get('/register', function(){

//  return view('auth.register');
//});
