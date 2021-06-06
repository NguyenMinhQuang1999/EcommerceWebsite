<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UserFavouriteController extends Controller
{
    public function index() 
    {
        $userId = \Auth::id();
        $products = Product::with('category')
        ->whereHas('favourite', function($query) use ($userId){
            $query->where('uf_user_id', $userId);
        })->select('id', 'pro_name', 'pro_slug', 'pro_avatar', 'pro_price', 'pro_category_id')
        ->paginate(10);
        return view('user.favourite', compact('products'));
    }
    //San pham yeu thich
    public function addFavourite(Request $request, $id) 
    {
        if($request->ajax()) {
            $product = Product::find($id);
            if(!$product) {
                return response(['messages' => "Không tồn tại sản phẩm!"]);
            }
            //dump($product);
            $messages = 'Thêm sản phẩm yêu thích thành công!';
            try{
                \DB::table('user_favourites')->insert([
                    'uf_product_id' => $id,
                    'uf_user_id' => \Auth::id()
                ]);
            }
            catch(\Exception $e) {
                $messages = 'Sản phẩm này đã được yêu thích!';
            }
            return response(['messages' => $messages]);
        }
    }
}