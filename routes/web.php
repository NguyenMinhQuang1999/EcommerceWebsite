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


include ('router_admin.php');


Route::group((['namespace' => 'fontend']), function() {
    //

    Route::get('', 'HomeController@index')->name('home');
    Route::get('product-list', "ProductController@index")->name('product.list');
    Route::get('san-pham/{slug}', "ProductDetailController@index")->name('product.detail');

});

