<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'api-admin', 'namespace' => 'Admin'],  function() {
    Route::get('/', function() {
        return view('admin.index');
    });
    //Route danh muc san pham
    Route::group(['prefix' => 'category'], function() {
    Route::get('', 'AdminCategoryController@index')->name('admin.category.index');
    Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
    Route::post('create', 'AdminCategoryController@store');

    Route::get('update/{id}', 'AdminCategoryController@edit')->name('admin.category.update');
    Route::post('update/{id}', 'AdminCategoryController@update');

    Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
    Route::get('hot/{id}', 'AdminCategoryController@hot')->name('admin.category.hot');
    Route::get('delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');
    });

    Route::group(['prefix' => 'keyword'], function() {
    Route::get('', 'AdminKeywordController@index')->name('admin.keyword.index');
    Route::get('create', 'AdminKeywordController@create')->name('admin.keyword.create');
    Route::post('create', 'AdminKeywordController@store');

    Route::get('update/{id}', 'AdminKeywordController@edit')->name('admin.keyword.update');
    Route::post('update/{id}', 'AdminKeywordController@update');

    // Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
    Route::get('hot/{id}', 'AdminKeywordController@hot')->name('admin.keyword.hot');
    Route::get('delete/{id}', 'AdminKeywordController@delete')->name('admin.keyword.delete');
    });


    Route::group(['prefix' => 'product'], function() {
        Route::get('', 'AdminProductController@index')->name('admin.product.index');
        Route::get('create', 'AdminProductController@create')->name('admin.product.create');
        Route::post('create', 'AdminProductController@store');

        Route::get('update/{id}', 'AdminProductController@edit')->name('admin.product.update');
        Route::post('update/{id}', 'AdminProductController@update');

         Route::get('active/{id}', 'AdminProductController@active')->name('admin.product.active');
        Route::get('hot/{id}', 'AdminProductController@hot')->name('admin.product.hot');
        Route::get('delete/{id}', 'AdminProductController@delete')->name('admin.product.delete');

    });

});
