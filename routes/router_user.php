<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'account', 'namespace' => 'User', 'middleware' => 'check_user_login'], function() {
    Route::get('', 'UserDashboardController@dashboard')->name('get.user.dashboard');
    Route::get('update-info', 'UserInfoController@updateInfo')->name('get.user.update_info');
    Route::post('update-info', 'UserInfoController@saveUpdateInfo');

    Route::get('transaction', 'UserTransactionController@index')->name('get.user.transaction');
    Route::get('favourite', 'UserFavouriteController@index')->name('get.user.favourite');

    Route::post('ajax-favourite/{idProduct}', 'UserFavouriteController@addFavourite')->name('ajax_get.user.add_favourite');
    Route::post('ajax-rating', 'UserRatingController@addRatingProduct')->name('ajax_post.user.rating');
});
