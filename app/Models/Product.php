<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $country = [
        "0" => "[N/A]",
        "1" => "Viet Nam",
        "3" => 'Thuy Sy',
        "4" => 'My'
    ];
    protected $guarded = [''];

    public function getCountry() {
        return Arr::get($this->country, $this->pro_country, "[N/A]");
    }
    public function category() {
        return $this->belongsTo(Category::class, 'pro_category_id');
    }

    public function keywords() 
    {
        return $this->belongsToMany(KeyWord::class, 'product_keywords', 'pk_product_id', 'pk_keyword_id');
    }
}
