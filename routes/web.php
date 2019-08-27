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

Route::get('/viewAllProducts', 'HomeController@index2');
Route::get('/detailProducts/{id}', 'HomeController@show');

// Aquí es donde controlo lo del carrito de compras, agregar productos
Route::post('order/add/{id}', "OrderController@add")->name('order.add')->middleware('auth');
//Carrito de compras elimino productos
Route::get('order/remove/{id}', "OrderController@remove")->name('order.remove')->middleware('auth');
//Muestro los productos del carrito
Route::get('/order', 'OrderController@show')->name('order')->middleware('auth');
