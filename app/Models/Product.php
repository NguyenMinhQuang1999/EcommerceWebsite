<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use App\User;
class Product extends Model
{
    //
    public $country = [
  
        "1" => "Việt Nam",
        "3" => 'Thuỵ Sỹ',
        "4" => 'Mỹ'
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

    public function attributes() 
    {
        return $this->belongsToMany(Attribute::class, 'products_attributes', 'pa_product_id', 'pa_attribute_id');
    }

    public function favourite() 
    {
        return $this->belongsToMany(User::class, 'user_favourites', 'uf_product_id', 'uf_user_id');
    }
}