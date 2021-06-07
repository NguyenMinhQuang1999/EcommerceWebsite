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
            'name' => 'Tiếp nhận'
        ],
        '2' => [
            'class' => 'info',
            'name' => 'Đang vận chuyển'
        ],
        '3' => [
            'class' => 'success',
            'name' => 'Đã bàn giao'
        ],
        '-1' => [
            'class' => 'danger',
            'name' => 'Đã hủy'
        ],

    ];
    // Arr::get phuong thuc lay gia tri bang mang long nhau bang dau cham, chap nhan gia tri
    // mac dinh neu khong co khoa duoc chi dinh khong ton tai
    
    public function getStatus() {
        return Arr::get($this->status, $this->tst_status, '[N/A]');
    }

    public function payment() {
        return $this->belongsTo( Payment::class, 'id', 'p_transaction_id');
    }
}