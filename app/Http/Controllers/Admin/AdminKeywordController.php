<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestKeyword;
use App\Models\KeyWord;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;



class AdminKeywordController extends Controller
{
    //
    public function index() {
        $keywords = KeyWord::paginate(10);
        $viewData = [
            'keywords' => $keywords
        ];
        return view('admin.keyword.index', $viewData);
    }

    public function create() {
        return view('admin.keyword.create');
    }

    public function store(AdminRequestKeyword $request) {
        $data = $request->except('_token');
        $data['k_slug'] = Str::slug($request->k_name);
        $data['created_at'] = Carbon::now();
        $id = KeyWord::insertGetId($data);
        return redirect()->back();
    }
    public function edit($id) {
        $keyword = KeyWord::find($id);
        return view('admin.keyword.update',compact('keyword'));
    }

    public function update(AdminRequestKeyword $request, $id) {
        $keyword = KeyWord::find($id);
        $data = $request->except('_token');
        $data['k_slug'] = Str::slug($request->k_name);
        $data['updated_at'] = Carbon::now();

        $keyword->update($data);
        return redirect()->back();
    }

    public function hot($id) {
        $keyword = KeyWord::find($id);
        $keyword->k_hot = !$keyword->k_hot;
        $keyword->save();
        return redirect()->back();
    }

    public function delete($id) {
      $keyword = KeyWord::find($id);
      if($keyword) {
          $keyword->delete();
      }
      return redirect()->back();
  }
}
