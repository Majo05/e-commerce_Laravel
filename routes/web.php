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

Route::get('/profile', 'ProfileController@view');
Route::post('/profile/update', 'ProfileController@update');

//Route::get('/faq', 'FaqController@view');
Route::get('/questions', 'QuestionController@index');
//Route::get('/register', function(){

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/products', 'ProductController');
  //  Route::resource('/users', 'AdminUserController');
});

Route::post('/products/store', 'ProductController@store');
Route::get('/detailsProduct/{id}', 'ProductController@show');
Route::post('/products/edit', 'ProductController@edit');
Route::get('/eliminar/{id}', 'ProductController@destroy');


//  return view('auth.register');
//});

// Aquí es donde controlo lo del carrito de compras, agregar productos
Route::get('cart/add/{id}', "CartController@add")->name('cart.add')->middleware('auth');
//Carrito de compras elimino productos
Route::get('cart/remove/{id}', "CartController@remove")->name('cart.remove')->middleware('auth');
//Muestro los productos del carrito
Route::get('/cart', 'CartController@show')->name('cart')->middleware('auth');
