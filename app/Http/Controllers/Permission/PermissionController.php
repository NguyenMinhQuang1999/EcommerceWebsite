<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestPermission;
use App\Models\GroupPermission;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PermissionController extends Controller
{

    public function __construct(GroupPermission $group) {
        view()->share([
            'permission_active' =>'active',
            'groups' => $group->all()
        ]);
    }
    //
    public function index() {
        $permissions = Permission::with([
            'groups'=> function($groups) {
                $groups->select('id', 'name');
            }
        ])->orderBy('id', "DESC")->paginate(10);
        $viewData = [
            'permissions' => $permissions
        ];
        return view('admin.permission.index', $viewData);
    }
    public function create() {
        return view('admin.permission.create');
    }

    public function edit($id) {
        $permission= Permission::find($id);
        return view('admin.permission.update', compact('permission'));
    }

    public function update(RequestPermission $request, $id) {

            $this->createOrUpdate($request, $id);

            return redirect()->back();



    }

    public function store(RequestPermission $request) {
        $this->createOrUpdate($request);
        return redirect()->back();
    }

    public function delete($id) {
        $permission = Permission::find($id);
        if($permission) {
            $permission->delete();
            return redirect()->back();
        }
    }

    public function createOrUpdate(RequestPermission $request, $id='')
    {
        $permission  = new Permission();
        if($id) {
            $permission = Permission::findOrFail($id);
        }
        $permission->name = str::slug($request->display_name);
        $permission->display_name = $request->display_name;
        $permission->group_permission_id = $request->group_permission_id;
        $permission->description = $request->description;
        $permission->save();
    }

}
