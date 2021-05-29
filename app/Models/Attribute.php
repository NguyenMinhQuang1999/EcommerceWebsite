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
            'name' => 'Đặc điểm sản phẩm',
            'class' => 'label label-info'
        ],
        2 => [
            'name' => 'Công nghệ',
            'class' => 'label label-default'
        ],
        3 => [
            'name' => 'Thông tin chung',
            'class' => 'label labelsuccess'
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