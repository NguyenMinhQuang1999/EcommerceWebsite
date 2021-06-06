<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogBaseController extends Controller
{
    //
    public function getDataBase() 
    {
        //lay ra san pham ban chay
        $productPays = Product::where([
            'pro_active' => '1'
        ])
        ->where('pro_pay', '>',0)
        ->select('id', 'pro_name', 'pro_slug', 'pro_sale', 'pro_avatar', 'pro_price')
        ->orderByDesc('pro_pay')
        ->limit(5)
        ->get();
        return $productPays;
    }

    //lay post hot gan day
    public function getBlogHot() 
    {
        $articleHot = Article::where([
            'a_hot' => '1',
            'a_active' => 1
        ])
        ->orderByDesc('created_at')
        ->limit(5)
        ->get();
        return $articleHot;
    }
}
