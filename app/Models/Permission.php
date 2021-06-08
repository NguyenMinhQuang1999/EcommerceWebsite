<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Shanmuga\LaravelEntrust\Models\EntrustPermission;

class Permission extends EntrustPermission
{
    //
    protected $table = 'permissions';

    protected $guarded = [];

    public function groups() {
        return $this->belongsTo(GroupPermission::class, 'group_permission_id', 'id');
    }

}
