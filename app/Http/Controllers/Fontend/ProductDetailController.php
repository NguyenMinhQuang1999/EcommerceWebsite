<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\ProcessViewService;

class ProductDetailController extends Controller
{
    //
    public function index(Request $request, $slug)
    {
        $arraySlug = explode('-', $slug);// tach chuoi thanh mang theo ki tu phan cach
        $id = array_pop($arraySlug);// xoa phan tu cuoi mang tra ve phan tu do
        ProcessViewService::view('products', 'pro_view','product', $id);
        if($id) {
            $product = Product::with('category:id,c_name,c_slug','keywords')->findOrFail($id);
            $viewData = [
                'product' => $product,
                'productSuggests' => $this->getProductSuggests($product->pro_category_id),
                'title_page' => $product->pro_name
            ];
            return view('frontend.pages.product_detail.index', $viewData);
        }
        return redirect()->to('/');
        
    }

    public function getProductSuggests($categoryId) 
    {
        $products = Product::where([
            'pro_active' => 1,
            'pro_category_id' => $categoryId
        ])
          ->orderByDesc('id')
          ->select('id', 'pro_name', 'pro_sale', 'pro_avatar', 'pro_price')
          ->limit(12)
          ->get();

        return $products;
    }

}
