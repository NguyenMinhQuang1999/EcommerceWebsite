<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleDetailController extends BlogBaseController
{
    //
    public function index(Request $request, $slug) 
    {
        $arraySlug = explode('-',$slug);
        $id = array_pop($arraySlug);
        $article = Article::find($id);
        $articleHot = $this->getBlogHot();
        return view('frontend.pages.article_detail.index', compact('article', 'articleHot'));
    }
}
