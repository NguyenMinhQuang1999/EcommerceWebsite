<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attribute;

class CategoryController extends Controller
{
    //
    public function index(Request $request, $slug) {
        $arraySlug = explode('-', $slug);// tach chuoi thanh mang theo ki tu phan cach
        $id = array_pop($arraySlug);// xoa phan tu cuoi mang tra ve phan tu do
        $attributes = $this->syncAttributesGroup();
        $product = Product::where(['pro_active'=> 1, 'pro_category_id' => $id]);
        if($request->price) {
            $price = $request->price;
            if($price == 10) {
                $product->where('pro_price' ,'>', 10000000);
            }else {
                $product->where('pro_price', '<=', 1000000 * $price);
            }

        }

     $product = $product->orderByDesc('id')
                           ->select('id', 'pro_name', 'pro_price', 'pro_slug', 'pro_sale','pro_avatar', 'pro_price')
                           ->paginate(12);          
     $productContry = new Product();
        $viewData = [
            'products' => $product,
            'attributes' => $attributes,
            'country' => $productContry->country,
        ];
   
    
        return view('frontend.pages.product.index', $viewData);
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