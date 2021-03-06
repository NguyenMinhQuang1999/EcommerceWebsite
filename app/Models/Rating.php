<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Product;
class Rating extends Model
{
    //
    protected $guarded = [''];

    public function product()
    {
        return $this->belongsTo(Product::class, 'r_product_id');
    }

    public function user() 
    {
        return $this->belongsTo(User::class, 'r_user_id');
    }
}
