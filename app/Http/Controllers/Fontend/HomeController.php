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
        

        $productsHot = Product::where(['pro_active' => 1 , 'pro_hot' => 1])
            ->orderByDesc('id')
            ->limit(4)
            ->select('id', 'pro_name', 'pro_price', 'pro_slug', 'pro_sale','pro_avatar', 'pro_price')
            ->get();

            $viewData = [
                'productsNew' => $productsNew,
                'productsHot' => $productsHot,
                'title_page' => 'Cửa hàng'
            ];
        return view('frontend.pages.home.index', $viewData);
    }
}