<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestArticle;
use App\Models\Article;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AdminArticleController extends Controller
{
    //
   public function index()
    {
       $articles = Article::with('menu:id,mn_name')->get();
       $viewData  = [
           'articles' => $articles
       ];
       return view('admin.article.index', $viewData);
    }

    public function create()
    {
        $menus = Menu::all();
        return view('admin.article.create', compact('menus'));
    }
   

    public function store(AdminRequestArticle $request)
    {
        $data = $request->except('_token', 'a_avatar');
        $data['a_slug'] = Str::slug($request->a_name);
        $data['created_at'] = Carbon::now();
        if($request->a_avatar) {
            $image = upload_image('a_avatar');
            if($image['code'] == 1) {
                $data['a_avatar'] = $image['name'];
            }
        }

        $id = Article::insertGetId($data);
        return redirect()->back();
    }

    public function edit($id) 
    {
        $article = Article::find($id);
        $menus = Menu::all();
        return view('admin.article.update', compact('article', 'menus'));
    }

  
    public function update(AdminRequestArticle $request, $id)
     {
         $data = $request->except('_token', 'a_avatar');
         $article = Article::findOrFail($id);
         $data['a_slug'] = Str::slug($request->a_name);
         $data['updated_at'] = Carbon::now();
         if($request->a_avatar) {
             $image = upload_image('a_avatar');
             if($image['code'] == 1) {
                 $data['a_avatar'] == $image['name'];
             }
         }

         $article->update($data);
         return redirect('api-admin/article');
     }

    public function hot($id)
    {
        $article = Article::find($id);
        $article->a_hot = !$article->a_hot;
        $article->save();
        return redirect()->back();
    }

    public function active($id) 
    {
        $article = Article::find($id);
        $article->a_active = !$article->a_active;
        $article->save();
        toastr()->success('update thanh cong');
        return redirect()->back();
    }

    public function changeStatus(Request $request) 
    {
        $article = Article::find($request->id);
        $article->a_active = !$article->a_active;
        $article->save();
      
        return response()->json(['success' => "change status successfully!", 'status' => $article->a_active]);
    }

    public function delete($id) 
    {
        $article = Article::find($id);
        if($article) {
            $article->delete();
            toastr()->success('update thanh cong');
            return redirect()->back();
        }
    }
}
