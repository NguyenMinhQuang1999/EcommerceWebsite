<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestAttribute;
use App\Models\Category;
use App\Models\Attribute;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminAttributeController extends Controller
{
    //
    public function index()   {
        $attributes = Attribute::with('category:id,c_name')->orderByDesc('id')->get();
        return view('admin.attribute.index', compact('attributes'));
    }
    public function create()   {
        $categories = Category::select('id', 'c_name')->get();

        return view('admin.attribute.create', compact('categories'));
    }
    public function store(AdminRequestAttribute $request)   {
        //dd($request->all());
        $data = $request->except('_token');
        $data['atb_slug'] = Str::slug($request->atb_name);
        $data['created_at'] = Carbon::now();

        $id = Attribute::insertGetId($data);

        return redirect()->back();
    }

    public function edit($id) {
        $categories = Category::select('id', 'c_name')->get();
        $attribute = Attribute::find($id);
        return view('admin.attribute.update', compact('categories', 'attribute'));
    }

    public function update(AdminRequestAttribute $request, $id) {
        $attribute = Attribute::find($id);

        $data = $request->except('_token');
        $data['atb_slug'] = Str::slug($request->atb_name);
        $data['updated_at'] = Carbon::now();
        $attribute->update($data);
        return redirect()->back();
    }
    public function delete($id) {
        $attribute = Attribute::find($id);
        if($attribute) {
            $attribute->delete();
            return redirect()->back();
        }
    }

}
