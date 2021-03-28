<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
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
        $categories = Category::all();
        View::share('categories', $categories);

        $categoriesHot = Category::where('c_hot')->get();
        view()->share('categoriesHot', $categoriesHot);
    }
}
