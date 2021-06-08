<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPermission extends Model
{
    //
    protected $table = 'group_permission';

    protected $guarded = [];
    public function group() {
        return $this->hasMany(Permission::class, 'group_permission_id', 'id');
    }
}