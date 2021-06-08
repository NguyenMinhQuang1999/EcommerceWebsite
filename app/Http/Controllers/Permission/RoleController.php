<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRole;
use App\Models\GroupPermission;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    public function __construct() {
        view()->share([
            'role_active' =>'active'
          
        ]);
    }
    //
    public function index() {
        $roles = Role::with('permissionRole')
           ->orderBy('id', "DESC")->paginate(10);
        $viewData = [
            'roles' => $roles
        ];
        return view('admin.role.index', $viewData);
    }
    public function create() {
        $permissionGroups = GroupPermission::select('*')->with('group')->get();
        // dd($permissionGroups);
        return view('admin.role.create',  compact('permissionGroups'));
    }

    public function edit($id) {
        $role= Role::find($id);
        $listPermission = DB::table('permission_role')->where('role_id', $id)->pluck('permission_id')->toArray();
        $permissionGroups = GroupPermission::select('*')->with('group')->get();
        $viewData = [
            'role' => $role,
            'listPermission' => $listPermission,
            'permissionGroups' => $permissionGroups

        ];

        return view('admin.role.update', $viewData);
    }

    public function update(RequestRole $request, $id) {
        DB::beginTransaction();
        try{
            $role = Role::find($id);
            $role->name = Str::slug($request->name);
            $role->display_name = $request->name;
            $role->description = $request->description;

            if($role->save()) {
                DB::table('permission_role')->where('role_id', $id)->delete();
                if(!empty($request->permissions)) {
                    foreach($request->permissions as $permission) {
                        DB::table('permission_role')->insert(['permission_id' => $permission, 'role_id' => $role->id]);
                    }
                }
            }

            DB::commit();
            return redirect()->back();


        }catch(\Exception $e) {
            DB::rollBack();
            return redirect()->back();

        }



    }

    public function store(RequestRole $request) {
        DB::beginTransaction();
        try{
            $role = new Role();
            $role->name = Str::slug($request->name);
            $role->display_name = $request->name;
            $role->description = $request->description;

            if($role->save()) {
                if(!empty($request->permissions)) {
                    foreach($request->permissions as $permission) {
                        DB::table('permission_role')->insert(['permission_id' => $permission, 'role_id' => $role->id]);
                    }
                }
            }

            DB::commit();
            return redirect()->back();


        }catch(\Exception $e) {
            DB::rollBack();
            return redirect()->back();

        }
    }

    public function delete($id) {
        $Role = Role::find($id);
        if($Role) {
            $Role->delete();
           // DB::table('permission_role')->where('role_id', $id)->delete();
            return redirect()->back();
        }
    }

    public function createOrUpdate(RequestRole $request, $id='')
    {
        $Role  = new Role();
        if($id) {
            $Role = Role::findOrFail($id);
        }
        $Role->display_name = $request->display_name;
        $Role->group_Role_id = $request->group_Role_id;
        $Role->description = $request->description;
        $Role->save();
    }

}
