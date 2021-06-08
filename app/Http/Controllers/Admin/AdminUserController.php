<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestUser;
use App\Models\Role;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    //

    public function __construct(Role $role) 
    {
        view()->share([
            'roles' => $role::all()
        ]);
    }


    public function index() 
    {
        $users = User::paginate(10);
        $viewData = [
            'users' => $users
        ];
        return view('admin.user.index', $viewData);
    }

    public function create() {
        return view('admin.user.create');
    }

    public function edit($id) {

        $user = User::with([
            'userRole' => function($userRole) {
                $userRole->select('*');
            }
        ])->find($id);
       // dd($user);

        //  dd($user->can('xem-san-pham'));   // true
         ;   // false)
        $listRoleUser = DB::table('role_user')->where('user_id', $id)->first();
        // dd($listRoleUser);
        $viewData = [
            'user' => $user,
            'listRoleUser' => $listRoleUser
        ];
        return view('admin.user.update', $viewData);
    }

     function update(RequestUser $request, $id) {
        // DB::beginTransaction();
        // try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->status = $request->status;
            if($user->save()) {
                DB::table('role_user')->where('user_id', $id)->delete();
                DB::table('role_user')->insert(['role_id' => $request->role, 'user_id' => $user->id]);
            }

            DB::commit();
            return redirect()->back();
        // }
        // catch(\Exception $e) {
        //     DB::rollback();
        //     return redirect()->back();
        // }
    }

    public function store(RequestUser $request) 
    {
        // DB::beginTransaction();
        // try {
            $user = new User();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->status = $request->status;
            if($user->save()) {
                DB::table('role_user')->insert(['role_id' => $request->role, 'user_id' => $user->id]);
            }

            DB::commit();
            return redirect()->back();
        // }
        // catch(\Exception $e) {
        //     DB::rollback();
        //     return redirect()->back();
        // }
    }

    public function delete($id) {
        $user = User::find($id);
        if($user) {
            $user->delete();
            return redirect()->back();
        }
    }
}
