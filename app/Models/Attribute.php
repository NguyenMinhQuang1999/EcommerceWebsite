<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use App\Models\Category;
class Attribute extends Model
{
    //
     protected  $guarded = [''];
     protected $table = 'attributes';

    protected $type = [
        1 => [
            'name' => 'Đôi',
            'class' => 'lable lable-info'
        ],
        2 => [
            'name' => 'Năng lượng',
            'class' => 'lable lable-default'
        ],
        3 => [
            'name' => 'Loại dây',
            'class' => 'lable lable-danger'
        ],
        4 => [
            'name' => 'Loại vỏ',
            'class' => 'lable lable-success'
        ],

    ];

    public function getType()
    {
        return Arr::get($this->type, $this->atb_type, "[N/A]");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'atb_category_id');
    }
}
