<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {
        $attributes = $this->syncAttributesGroup();
        $product = Product::where(['pro_active'=> 1])
                    ->orderByDesc('id')
                    ->select('id', 'pro_name', 'pro_price', 'pro_slug', 'pro_sale','pro_avatar', 'pro_price')
                    ->paginate(12);
        $viewData = [
            'products' => $product,
            'attributes' => $attributes
        ];

        return view('frontend.pages.product.index', $viewData);
    }

    public function getCategoryById($slug) {
        $arraySlug = explode('-', $slug);// tach chuoi thanh mang theo ki tu phan cach
        $id = array_pop($arraySlug);// xoa phan tu cuoi mang tra ve phan tu do

        if($id) {
            $product = Product::findOrFail($id);
            $viewData = [
                'product' => $product
            ];
            return view('frontend.pages.product_detail.index', $viewData);
        }
        return redirect()->to('/');
    }

    public function syncAttributesGroup() {
        $attributes = Attribute::get();
        $groupAttribute  = [];
        foreach($attributes as $key => $attribute) {
            $key = $attribute->gettype($attribute->atb_name)['name'];
            $groupAttribute[$key][] = $attribute->toArray();
        }
        return $groupAttribute;
    }
}
