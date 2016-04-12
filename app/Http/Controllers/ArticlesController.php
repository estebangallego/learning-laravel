<?php

namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;



class ArticlesController extends Controller
{
    // Show all articles
    // @return Response
    
    public function index()
    {
    	$articles = Article::latest('published_at', 'desc')->published()->get();
    	// return $articles;
    	return view('articles.index', compact('articles'));
    	// return view('article.index')->with('articles', $articles);	
    }

    // Show single article

    public function show($id)
    {
        // dd('show');
    	// return $id; 
    	$article = Article::findOrFail($id);
        // dd($article->published_at);
        // dd($article->created_at);
        // dd($article->created_at->year);
        // dd($article->created_at->addDays(8)->format('m-d-Y'));
        // dd($article->created_at->addDays(2)->diffforhumans());
    	return view('articles.show', compact('article'));
    	// return $article;
    }

    // Show the page to create a new article
    public function create(){
        // dd('show');
        return view('articles.create');
    }

    // Save article
    public function store(Requests\CreateArticleRequest $request)
    {
       // form validation
        

        // $input = Request::All();
        Article::create($request->all());
        return redirect('articles');
        // return $input;
        // $input = Request::get('title');
    }

    // Test
    public function hello(){
        return view('articles.test');
    }
}
