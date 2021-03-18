<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends BlogBaseController
{
    //
    public function index()
    {
        $articles = Article::where([
            'a_active' => 1
        ])
        ->select('id', 'a_slug', 'a_name','a_avatar', 'a_description')
        ->orderByDesc('id')
        ->paginate('10');
        $viewData = [
            'articles' => $articles,
            'products' => $this->getDataBase(),
            'articleHot' => $this->getBlogHot()
        ];
     
        return view('frontend.pages.article.index', $viewData);
    }
}
