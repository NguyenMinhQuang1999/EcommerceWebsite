<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected  $guarded = [''];
    public function user() {
        
        return $this->belongsTo(User::class, 'b_user_id', 'id');
    }
}
