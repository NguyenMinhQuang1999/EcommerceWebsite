<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class BillDetail extends Model
{
    //
    protected  $guarded = [''];
    public function product(){
        return $this->belongsTo(Product::class, 'd_product_id');
    }
}
