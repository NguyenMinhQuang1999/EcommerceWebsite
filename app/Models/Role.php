<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Shanmuga\LaravelEntrust\Models\EntrustRole;


class Role extends EntrustRole
{
    //
    // use HasFactory;

    protected $table = 'roles';

    protected $guarded = [];

    public function permissionRole() {
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
    }

    // public function cachedPermissions() {
    //     return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
    // }

    public function users() {
        return $this->belongsToMany(Config::get('auth.providers.users.model'), Config::get('enstrust.tables.role_user'), Config::get('enstrust.foreign_keys.role'), Config::get('enstrust.foreign_keys.user'));
    }

}