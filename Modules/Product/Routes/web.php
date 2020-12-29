<?php
use Illuminate\Support\Facades\Route;
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

Route::prefix('')->group(function() {
    Route::get('/', '\Modules\Product\Http\Controllers\ProductController@index')->name('products');
    Route::get('/login-after', '\Modules\Product\Http\Controllers\ProductAPIController@loginAfter')->name('product.login.after');
    Route::get('/logout', '\Modules\Product\Http\Controllers\ProductAPIController@logout')->name('product.logout');
    Route::get('/checkout-to-cart', '\Modules\Product\Http\Controllers\ProductAPIController@checkoutToCart')->name('product.checkouToCart');

    Route::get('add-to-cart/{id}', '\Modules\Product\Http\Controllers\ProductAPIController@addToCart')->name('product.addToCart');

    Route::get('/product-detail/render', '\Modules\Product\Http\Controllers\ProductController@renderDetail')->name('product.renderdetail');
    Route::group(['prefix' => '/api'], function () {
        Route::get('product-detail/{id}', '\Modules\Product\Http\Controllers\ProductAPIController@apiProductDetail')->name('api.productCheckout');
    });
});

