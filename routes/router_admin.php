<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/403', function() {
    return view('admin.page403');
});

Route::group(['prefix' => 'admin-auth', 'namespace' => 'Admin\Auth'], function() {

    Route::get('login', 'AdminLoginController@getLoginAdmin')->name('get.login.admin');
    Route::post('login', 'AdminLoginController@postLogin');
    Route::get('logout', 'AdminLoginController@getLogout')->name('get.logout.admin');
});

Route::get('tk', function() {
    return view('admin.sactistical.index');
});
Route::group(['prefix' => 'api-admin', 'namespace' => 'Permission', 'middleware' => 'check_login_admin'],  function() {
    Route::group(['prefix' => 'group-permistion'], function() {
        Route::get('', 'AdminGroupPermissionController@index')->name('admin.group_permission.index');
        Route::get('create', 'AdminGroupPermissionController@create')->name('admin.group_permission.create');
        Route::post('create', 'AdminGroupPermissionController@store');

        Route::get('update/{id}', 'AdminGroupPermissionController@edit')->name('admin.group_permission.update');
        Route::post('update/{id}', 'AdminGroupPermissionController@update');


        Route::get('delete/{id}', 'AdminGroupPermissionController@delete')->name('admin.group_permission.delete');
        });

        Route::group(['prefix' => 'permission'], function() {
            Route::get('', 'PermissionController@index')->name('admin.permission.index');
            Route::get('create', 'PermissionController@create')->name('admin.permission.create');
            Route::post('create', 'PermissionController@store');

            Route::get('update/{id}', 'PermissionController@edit')->name('admin.permission.update');
            Route::post('update/{id}', 'PermissionController@update');

            Route::get('delete/{id}', 'PermissionController@delete')->name('admin.permission.delete');
            });

        Route::group(['prefix' => 'role'], function() {
                Route::get('', 'RoleController@index')->name('admin.role.index');
                Route::get('create', 'RoleController@create')->name('admin.role.create');
                Route::post('create', 'RoleController@store');

                Route::get('update/{id}', 'RoleController@edit')->name('admin.role.update');
                Route::post('update/{id}', 'RoleController@update');

                Route::get('delete/{id}', 'RoleController@delete')->name('admin.role.delete');
         });
});

Route::group(['prefix' => 'api-admin', 'namespace' => 'Admin', 'middleware' => 'check_login_admin'],  function() {
    Route::get('/', function() {
        return view('admin.index');
    });

    //Route thong ke
    Route::group(['prefix' => 'sactistical'], function() {
        Route::get('', 'AdminSactisticalController@index')->name('get.sactistical');

    });

    Route::group(['prefix' => 'supplier'], function() {
        Route::get('', 'AdminSupplierController@index')->name('admin.supplier.index');
        Route::get('create', 'AdminSupplierController@create')->name('admin.supplier.create');
        Route::post('create', 'AdminSupplierController@store');

        Route::get('update/{id}', 'AdminSupplierController@edit')->name('admin.supplier.update');
        Route::post('update/{id}', 'AdminSupplierController@update');

        Route::get('delete/{id}', 'AdminSupplierController@delete')->name('admin.supplier.delete');
 });

    Route::group(['prefix' => 'bill'], function() {
        Route::get('', 'AdminBillController@index')->name('admin.bill.index');
        Route::get('create', 'AdminBillController@create')->name('admin.bill.create');
        Route::get('view-bill-detail/{id}', 'AdminBillController@getBillDetail')->name('ajax.admin.bill.detail');

        Route::post('create', 'AdminBillController@store');




        Route::get('delete/{id}', 'AdminBillController@delete')->name('admin.bill.delete');
    });





    //Route danh muc san pham


    Route::group(['prefix' => 'category'], function() {
    Route::get('', 'AdminCategoryController@index')->name('admin.category.index')->middleware('permission:xem-danh-muc');
    Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
    Route::post('create', 'AdminCategoryController@store');

    Route::get('update/{id}', 'AdminCategoryController@edit')->name('admin.category.update');
    Route::post('update/{id}', 'AdminCategoryController@update');

    Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
    Route::get('hot/{id}', 'AdminCategoryController@hot')->name('admin.category.hot');
    Route::get('delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');
    });

     //Route danh muc san pham
    Route::group(['prefix' => 'user',  'middleware' => ['role:admin|khach-hang']], function() {
        Route::get('', 'AdminUserController@index')->name('admin.user.index')->middleware('permission:xem-thong-tin-nguoi-dung');
        Route::get('create', 'AdminUserController@create')->name('admin.user.create');
        Route::post('create', 'AdminUserController@store');

        Route::get('update/{id}', 'AdminUserController@edit')->name('admin.user.update');
        Route::post('update/{id}', 'AdminUserController@update');

        Route::get('active/{id}', 'AdminUserController@active')->name('admin.user.active');

        Route::get('delete/{id}', 'AdminUserController@delete')->name('admin.user.delete');
    });

      //Route transaction
      Route::group(['prefix' => 'transaction'], function() {
        Route::get('', 'AdminTransactionController@index')->name('admin.transaction.index');
        Route::get('delete/{id}', 'AdminTransactionController@delete')->name('admin.transaction.delete');
        Route::get('delete-order-item/{id}', 'AdminTransactionController@deleteOrderItem')->name('ajax_admin.transaction.delete_item');
        Route::get('view-detail/{id}', 'AdminTransactionController@getTransactionDetail')->name('ajax.admin.transaction.detailt');
        Route::get('action/{action}/{id}', 'AdminTransactionController@action')->name('admin.transaction.action');

        Route::get('print_order/{id}', 'AdminTransactionController@printOrder')->name('print.order');
    });

     //Route transaction
     Route::group(['prefix' => 'rating'], function() {
        Route::get('', 'AdminRatingController@index')->name('admin.rating.index');
        Route::get('delete/{id}', 'AdminRatingController@delete')->name('admin.rating.delete');

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
        Route::get('', 'AdminProductController@index')->name('admin.product.index')->middleware('permission:xem-san-pham');
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
