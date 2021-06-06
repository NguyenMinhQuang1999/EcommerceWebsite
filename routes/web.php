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
include ('router_user.php');

Route::get('/callback/{social}', 'Auth\SocialAuthController@callback');
Route::get('redirect/{social}', 'Auth\SocialAuthController@redirect')->name('get.login.google');
Route::group(['namespace' => 'Auth', 'prefix' => 'account'], function() {
    Route::get('register', 'RegisterController@getFormRegister')->name('get.register');
    Route::post('register', 'RegisterController@postRegister');

    Route::get('login', 'LoginController@getFormLogin')->name('get.login');
    Route::post('login', 'LoginController@postLogin');

    Route::get('logout', 'LoginController@logout')->name('get.logout');
    Route::get('reset-password', 'ResetPasswordController@getEmailReset')->name('get_reset_password');
    Route::post('reset-password', 'ResetPasswordController@checkEmailResetPassword');
    Route::get('change-password', 'ResetPasswordController@changePassword')->name('get.new_password');
    Route::post('change-password', 'ResetPasswordController@savePassword');

    Route::get('/{social}/redirect', 'SocialAuthController@redirect')->name('get.login.social');
    Route::get('/{social}/callback/', 'SocialAuthController@callback')->name('get.login.social_callbale');


});


Route::group(['namespace' => 'fontend'], function() {
    //

    Route::get('', 'HomeController@index')->name('home');
    Route::get('product-list', "ProductController@index")->name('product-list');
    Route::get('danh-muc/{slug}', "CategoryController@index")->name('category.list');
    Route::get('san-pham/{slug}', "ProductDetailController@index")->name('product.detail');
    Route::get('san-pham/{slug}/danh-gia', "ProductDetailController@getListRatingProduct")->name('get.product.rating_list');

    //Blog
    Route::get('bai-viet', 'BlogController@index')->name('get.blog.index');
    Route::get('bai-viet/{slug}', 'ArticleDetailController@index')->name('get.detail.index');

    //Gio hang
    Route::get('don-hang','ShoppingCart@index' )->name('get.shopping.list');
    Route::group(['prefix' => 'shopping'], function() {
        Route::get('add/{id}', 'ShoppingCart@add')->name('get.shopping.add');
        Route::get('delete/{id}', 'ShoppingCart@deleteItem')->name('get.shopping.delete');
        Route::get('update/{id}', 'ShoppingCart@update')->name('get.shopping.update');
        Route::get('checkout', 'ShoppingCart@checkout')->name('get.checkout');




    });
    Route::post('pay', 'ShoppingCart@postPay')->name('post.shopping.pay');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'check_login_admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
