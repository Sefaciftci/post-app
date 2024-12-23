<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//model
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::orderBy('created_at' , 'DESC')->get();
        return view('frontend.pages.home' , compact('articles'));
    }

    public function singlePage($slug){
        echo $slug;
    }
    
    


}