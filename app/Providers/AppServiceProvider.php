<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Chia se du lieu cho tat ca cac view
        if (Auth::id()) {
            $number = DB::table('user_favourites')->where('uf_user_id', Auth::id())->count();
            View::share('number', $number);
        }

        $categories = Category::all();
        View::share('categories', $categories);


        $categoriesHot = Category::where('c_hot', 1)->get();
        view()->share('categoriesHot', $categoriesHot);
    }
}
