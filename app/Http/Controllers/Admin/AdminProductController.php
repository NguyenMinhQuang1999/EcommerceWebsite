<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    //
    public function index() {
        $products = Product::with('category:id,c_name')->paginate(10);
        $attributes = $this->syncAttributesGroup();
        $viewData = [
            'products' => $products
        ];
        return view('admin.product.index', $viewData);
    }

    public function create() {
        $attributes = $this->syncAttributesGroup();
        $categories = Category::all();
        $attributeOld = [];

        return view('admin.product.create', compact('categories', 'attributes', 'attributeOld'));
    }

    public function store(AdminRequestProduct $request) {
        $data = $request->except('_token', 'pro_avatar', 'attribute');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        if($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if($image['code'] == 1) {
                $data['pro_avatar'] = $image['name'];
            }
        }

        $id =  Product::insertGetId($data);
        if($id) {
            $this->syncAttribute($request->attribute, $id);
        }

        return redirect()->back();
    }



    public function edit($id) {
        $categories = Category::all();
        // $attributes = Attribute::orderByDesc('atb_type')->get();
        $attributes = $this->syncAttributesGroup();
        $product = Product::findOrFail($id);
        $attributeOld = DB::table('products_attributes')
        ->where('pa_product_id', $id)
        ->pluck('pa_attribute_id')
        ->toArray();
        if(!$attributeOld) {
            $attributeOld = [];
        }
        $viewData = [
            'categories' => $categories,
            'product' => $product,
            'attributeOld' => $attributeOld,
            'attributes' => $attributes
        ];



        return view('admin.product.update', $viewData);
    }

    public function update(AdminRequestProduct $request, $id) {
        $data = $request->except('_token', 'pro_avatar', 'attribute');
        $product = Product::findOrFail($id);
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        if($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if($image['code'] == 1) {
                $data['pro_avartar'] == $image['name'];
            }
        }
        $this->syncAttribute($request->attribute, $id);
        $product->update($data);
        return redirect('api-admin/product');



    }

    public function active($id) {
        $product = Product::find($id);
        $product->pro_active = !$product->pro_active;
        $product->save();
        return redirect()->back();
    }

    public function hot($id) {
        $product = Product::findOrFail($id);
        $product->pro_hot = !$product->pro_hot;
        $product->save();
        return redirect()->back();
    }

    public function delete($id) {
        $product = Product::find($id);
        if($product) {
            $product->delete();
            return redirect()->back();
        }
    }
    public function syncAttribute($attributes, $idProduct) {
        if(!empty($attributes)) {
            $datas = [];
            foreach($attributes as $key => $value) {
                $datas[] = [
                    'pa_product_id' => $idProduct,
                    'pa_attribute_id' => $value
                ];

            }
        }
        if(!empty($datas) ) {
            DB::table('products_attributes')->where('pa_product_id', $idProduct
            )->delete();
            DB::table('products_attributes')->insert($datas);
        }
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
