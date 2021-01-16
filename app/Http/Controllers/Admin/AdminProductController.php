<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminProductController extends Controller
{
    //
    public function index() {
        $products = Product::paginate(10);
        $viewData = [
            'products' => $products
        ];
        return view('admin.product.index', $viewData);
    }

    public function create() {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(AdminRequestProduct $request) {
        $data = $request->except('_token', 'pro_avatar');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        if($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if($image['code'] == 1) {
                $data['pro_avatar'] = $image['name'];
            }
        }
        $id =  Product::insertGetId($data);
        return redirect()->back();
    }



    public function edit($id) {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        $viewData = [
            'categories' => $categories,
            'product' => $product
        ];
        return view('admin.product.update', $viewData);
    }

    public function update(AdminRequestProduct $request, $id) {
        $data = $request->except('_token', 'pro_avatar');
        $product = Product::findOrFail($id);
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        if($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if($image['code'] == 1) {
                $data['pro_avartar'] == $image['name'];
            }
        }
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
}
