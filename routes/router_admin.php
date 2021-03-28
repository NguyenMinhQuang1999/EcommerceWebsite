<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin-auth', 'namespace' => 'Admin\Auth'], function() {

    Route::get('login', 'AdminLoginController@getLoginAdmin')->name('get.login.admin');
    Route::post('login', 'AdminLoginController@postLogin');
    Route::get('logout', 'AdminLoginController@getLogout')->name('get.logout.admin');
});

Route::group(['prefix' => 'api-admin', 'namespace' => 'Admin', 'middleware' => 'check_login_admin'],  function() {
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

     //Route danh muc san pham
    Route::group(['prefix' => 'user'], function() {
        Route::get('', 'AdminUserController@index')->name('admin.user.index');
   
        Route::get('delete/{id}', 'AdminUserController@delete')->name('admin.user.delete');
    });

      //Route transaction
      Route::group(['prefix' => 'transaction'], function() {
        Route::get('', 'AdminTransactionController@index')->name('admin.transaction.index');   
        Route::get('delete/{id}', 'AdminTransactionController@delete')->name('admin.transaction.delete');
        Route::get('delete-order-item/{id}', 'AdminTransactionController@deleteOrderItem')->name('ajax_admin.transaction.delete_item');
        Route::get('view-detail/{id}', 'AdminTransactionController@getTransactionDetail')->name('ajax.admin.transaction.detailt');
        Route::get('action/{action}/{id}', 'AdminTransactionController@action')->name('admin.transaction.action');
    });

    Route::group(['prefix' => 'slider'], function() {
        Route::get('', 'AdminSliderController@index')->name('admin.slider.index');
        Route::get('create', 'AdminSliderController@create')->name('admin.slider.create');
        Route::post('create', 'AdminSliderController@store');

        Route::get('update/{id}', 'AdminSliderController@edit')->name('admin.slider.update');
        Route::post('update/{id}', 'AdminSliderController@update');

        Route::get('active/{id}', 'AdminSliderController@active')->name('admin.slider.active');
        Route::get('hot/{id}', 'AdminSliderController@hot')->name('admin.slider.hot');
        Route::get('delete/{id}', 'AdminSliderController@delete')->name('admin.slider.delete');
        });


    Route::group(['prefix' => 'attribute'], function() {
        Route::get('', 'AdminAttributeController@index')->name('admin.attribute.index');
        Route::get('create', 'AdminAttributeController@create')->name('admin.attribute.create');
        Route::post('create', 'AdminAttributeController@store');

        Route::get('update/{id}', 'AdminAttributeController@edit')->name('admin.attribute.update');
        Route::post('update/{id}', 'AdminAttributeController@update');

        Route::get('active/{id}', 'AdminAttributeController@active')->name('admin.attribute.active');
        Route::get('hot/{id}', 'AdminAttributeController@hot')->name('admin.attribute.hot');
        Route::get('delete/{id}', 'AdminAttributeController@delete')->name('admin.attribute.delete');
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

    Route::group(['prefix' => 'article'], function() {
        Route::get('', 'AdminArticleController@index')->name('admin.article.index');
        Route::get('create', 'AdminArticleController@create')->name('admin.article.create');
        Route::post('create', 'AdminArticleController@store');

        Route::get('update/{id}', 'AdminArticleController@edit')->name('admin.article.update');
        Route::post('update/{id}', 'AdminArticleController@update');

        Route::get('active/{id}', 'AdminArticleController@active')->name('admin.article.active');
        Route::get('status', 'AdminArticleController@changeStatus')->name('admin.article.status');
        Route::get('hot/{id}', 'AdminArticleController@hot')->name('admin.article.hot');
        Route::get('delete/{id}', 'AdminArticleController@delete')->name('admin.article.delete');

    });

    Route::group(['prefix' => 'menu'], function() {
        Route::get('', 'AdminMenuController@index')->name('admin.menu.index');
        Route::get('create', 'AdminMenuController@create')->name('admin.menu.create');
        Route::post('create', 'AdminMenuController@store');

        Route::get('update/{id}', 'AdminMenuController@edit')->name('admin.menu.update');
        Route::post('update/{id}', 'AdminMenuController@update');

        Route::get('active/{id}', 'AdminMenuController@active')->name('admin.menu.active');
        Route::get('hot/{id}', 'AdminMenuController@hot')->name('admin.menu.hot');
        Route::get('delete/{id}', 'AdminMenuController@delete')->name('admin.menu.delete');

    });

});
