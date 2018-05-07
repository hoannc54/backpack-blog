<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Backpack\NewsCRUD\app\Models\Article;

/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 1/7/18
 * Time: 08:41
 */

class HomeController extends Controller
{
    public function index(){
        $articles = Article::get();
        return view('frontend.home', [
            'articles' => $articles
        ]);
    }
}