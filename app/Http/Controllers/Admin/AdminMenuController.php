<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestMenu;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Menu;

class AdminMenuController extends Controller
{
    //
    public function index() {
        $menus = Menu::paginate(5);
        $viewData = [
            'menus' => $menus
        ];
        return view('admin.menu.index', $viewData);
    }
    public function create() {
        return view('admin.menu.create');
    }

    public function edit($id) {
        $menu = Menu::find($id);
        return view('admin.menu.update', compact('menu'));
    }

    public function update(AdminRequestMenu $request, $id) {
        $menu = Menu::find($id);
        $data = $request->except('_token');
        $data['mn_slug'] = Str::slug($request->mn_name);
        $data['updated_at'] = Carbon::now();
        $menu->update($data);
        return redirect()->back();
    }

    public function store(AdminRequestMenu $request) {
        $data = $request->except('_token');
        $data['mn_slug'] = Str::slug($request->mn_name);
        $data['created_at'] = Carbon::now();
        $id = Menu::insertGetId($data);
        return redirect()->back();
    }

    public function active($id) {
        $Menu  = Menu::find($id);
        $Menu->mn_status = !$Menu->mn_status;
        $Menu->save();
        return redirect()->back();
    }

    public function hot($id) {
        $Menu = Menu::find($id);
        $Menu->mn_hot = !$Menu->mn_hot;
        $Menu->save();
        return redirect()->back();
    }

    public function delete($id) {
        $Menu = Menu::find($id);
        if($Menu) {
            $Menu->delete();
            return redirect()->back();
        }
    }
}
