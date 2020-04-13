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
    $products = App\Product::paginate(4);
    return view('welcome', compact('products'));
});

Auth::routes();
// Route::get('/home','HomeController')
//, 'middleware' => ['admin','auth']
Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function(){
Route::resource('/','AdminController');
Route::resource('/home','AdminController');
Route::resource('/product','ProductController');
Route::resource('/category','CategoryController');

});

Route::get('/products','ProductController@allproducts')->name('allproducts');
Route::get('cart', 'ProductController@cart');
Route::get('add-to-cart/{id}', 'ProductController@addToCart');
Route::patch('update-cart', 'ProductController@updateCart');

Route::delete('/remove-from-cart', 'ProductController@remove');
Route::get('/payment-method','PaymentController@paymentMethod')->name('paymentMethod');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
