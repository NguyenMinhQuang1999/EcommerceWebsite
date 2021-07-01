<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    //
    public function index() {
        $productsNew = Product::where('pro_active', 1)
            ->orderByDesc('id')
            ->limit(4)
            ->select('id', 'pro_name', 'pro_price', 'pro_slug', 'pro_sale','pro_avatar', 'pro_price')
            ->get();
        $productsView  = Product::orderByDesc('pro_view')
                             ->limit(10)
                             ->get();


        $productsHot = Product::where(['pro_active' => 1 , 'pro_hot' => 1])
            ->orderByDesc('id')
            ->limit(4)
            ->select('id', 'pro_name', 'pro_price', 'pro_slug', 'pro_sale','pro_avatar', 'pro_price')
            ->get();
        $productSalest = Product::where(['pro_active' => 1])
            ->orderByDesc('pro_pay')
            ->limit(4)
            ->select('id', 'pro_name', 'pro_price', 'pro_slug', 'pro_sale','pro_avatar', 'pro_price')
            ->get();

            $viewData = [
                'productsNew' => $productsNew,
                'productsHot' => $productsHot,
                'productsView' => $productsView,
                'productSalest' => $productSalest,
                'title_page' => 'Cửa hàng'
            ];

       return view('frontend.pages.home.index', $viewData);
    }
}