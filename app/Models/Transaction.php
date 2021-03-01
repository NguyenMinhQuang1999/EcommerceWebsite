<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class Transaction extends Model
{
    //
    protected $guarded = [''];

    protected $status = [
        '1' => [
            'class' => 'secondary',
            'name' => 'Tiep nhan'
        ],
        '2' => [
            'class' => 'info',
            'name' => 'Dang van chuyen'
        ],
        '3' => [
            'class' => 'success',
            'name' => 'Da ban giao'
        ],
        '-1' => [
            'class' => 'danger',
            'name' => 'Da huy'
        ],

    ];
    // Arr::get phuong thuc lay gia tri bang mang long nhau bang dau cham, chap nhan gia tri
    // mac dinh neu khong co khoa duoc chi dinh khong ton tai
    
    public function getStatus() {
        return Arr::get($this->status, $this->tst_status, '[N/A]');
    }
}
