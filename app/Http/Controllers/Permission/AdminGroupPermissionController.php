<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestGroupPermission;
use App\Models\GroupPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminGroupPermissionController extends Controller
{
    //
    public function index() {
        $groups = GroupPermission::paginate(5);
        $viewData = [
            'groups' => $groups
        ];
        return view('admin.group_permission.index', $viewData);
    }
    public function create() {
        return view('admin.group_permission.create');
    }

    public function edit($id) {
        $group= GroupPermission::find($id);
        return view('admin.group_permission.update', compact('group'));
    }

    public function update( AdminRequestGroupPermission $request, $id) {

            $this->createOrUpdate($request, $id);

            return redirect()->back();

    }

    public function store(AdminRequestGroupPermission $request) {
        $this->createOrUpdate($request);
        return redirect()->back();
    }

    public function active($id) {
        $group_permission  = GroupPermission::find($id);
        $group_permission->c_status = ! $group_permission->c_status;
        $group_permission->save();
        return redirect()->back();
    }

    public function hot($id) {
        $group_permission = GroupPermission::find($id);
        $group_permission->c_hot = !$group_permission->c_hot;
        $group_permission->save();
        return redirect()->back();
    }

    public function delete($id) {
        $group_permission = GroupPermission::find($id);
        if($group_permission) {
            $group_permission->delete();
            return redirect()->back();
        }
    }

    public function createOrUpdate(AdminRequestGroupPermission $request, $id='')
    {
        $group  = new GroupPermission();
        if($id) {
            $group = GroupPermission::find($id);
        }
        $group->name = $request->name;
        $group->description = $request->description;
        $group->save();
    }

}
