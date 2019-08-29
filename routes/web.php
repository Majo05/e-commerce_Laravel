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


Route::get('order/add/{id}', 'OrderController@add')->name('carrito.add')->middleware('auth');
Route::get('order', 'OrderController@index')->name('carrito')->middleware('auth');
Route::get('order/remove/{id}', 'OrderController@remove')->name('order.remove')->middleware('auth');
Route::get('order/flush', 'OrderController@flush')->name('order.remove')->middleware('auth');
//Route::get('cart/add/{id}', "CartController@add")->name('cart.add')->middleware('auth');
/*
Route::group(['prefix' => 'carrito'], function() {
    //Esta muestra todos los productos del carrito
    Route::get('/', 'OrderController@index')->name('carrito');
    //Esta permite adicionar un nuevo producto al carrito
    Route::get('/add/{product_id}', 'OrderController@add')->name('carrito.add');
    //Esta borra un producto del carrito
    Route::delete('/remove/{product_id}', 'OrderController@remove')->name('carrito.remove');
    //Esta ruta nos conduce a la forma de pago del cliente ya que acepta la compra
    Route::get('/checkout', 'OrderController@checkout')->name('carrito.checkout');
    //Esta ruta nos permite borar todos los elementos del carrito, ya que lo estamos trabajando con session
    Route::get('/flush', 'OrderController@flush')->name('carrito.flush');
}
);
*/

/*
// Aquí es donde controlo lo del carrito de compras, agregar productos
Route::post('order/add/{id}', "OrderController@add")->name('order.add')->middleware('auth');
//Carrito de compras elimino productos
Route::get('order/remove/{id}', "OrderController@remove")->name('order.remove')->middleware('auth');
//Muestro los productos del carrito
Route::get('/order/{user_id?}', 'OrderController@show')->name('order')->middleware('auth');

Route::get('/viewAllProducts/{category_id}','CategoryController@index')->name('category');
*/
