<?php

namespace App\Http\Controllers\Frontend;

use Backpack\NewsCRUD\app\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index($id, $slug){
        $article = Article::find($id);
        if (empty($article)){
            return abort(404);
        }
        return view('frontend.article.index', [
            'article' => $article
        ]);
    }

}
