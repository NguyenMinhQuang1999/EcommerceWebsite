<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(Request $request) {
        $paramAtbSearch = $request->except('price', 'page', 'key', 'country');

        $productContry = new Product();
        //tra ve tat ca gia tri cua mot mang
        $paramAtbSearch = array_values($paramAtbSearch);


        $attributes = $this->syncAttributesGroup();
        $product = Product::where(['pro_active'=> 1]);
        if(!empty($paramAtbSearch)) {
            $product->whereHas('attributes', function($query) use($paramAtbSearch) {
                $query->whereIn('pa_attribute_id', $paramAtbSearch);
            });
        }

        //Tim kiem theo ten
        if($request->key) {
            $product->where('pro_name', 'like', '%' . $request->key . '%')
                    ->orWhere('pro_price' ,'>=', $request->key);
        }

        //Loc theo xuat xu

        if($request->country) {
            $product->where('pro_country', $request->country);
        }

        //Loc theo gia neu price == 6 thi loc lon hon 10 trieu
        //nguoc lai loc theo gia 10000 * so thu tu $price = 1
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
        $categories = Category::all();
        $viewData = [
            'products' => $product,
            'attributes' => $attributes,
            'query' => $request->query(),
            'country' => $productContry->country,
            'categories'=>  $categories
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