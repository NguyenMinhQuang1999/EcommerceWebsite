<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Rating;
use Carbon\Carbon;

class UserRatingController extends Controller
{
    //
   public function addRatingProduct(Request $request) {
        if($request->ajax()) {
         
            $rating = new Rating();
            $rating->r_user_id = \Auth::id();
            $rating->r_product_id = $request->product_id;
            $rating->r_number = $request->review;
            $rating->r_comment = $request->comment;
            $rating->created_at  = Carbon::now();
           
            $rating->save();

            if($rating->id) {
                $this->ratingProduct($request->product_id,$request->review );
            }

            return response(['message' => "Danh gia san pham thanh cong!"]);

        }
    }
    public function ratingProduct($productId, $number) 
    {
        $product = Product::find($productId);
        $product->pro_review_total++;
        $product->pro_review_star += $number;
        $product->save();
    }
}
