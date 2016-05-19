<?php

namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;



class ArticlesController extends Controller
{
    // Show all articles
    // @return Response
    
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

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
        // redirect if user is not login
        // if (\Auth::guest())
        // {
        //     return redirect('articles');
        // }
        return view('articles.create');
    }

    // Save a new article
    public function store(Requests\ArticleRequest $request)
    {
        // Form validation
            
        // $input = Request::All();
        $article = new Article($request->all()); //user_id

        \Auth::user()->articles()->save($article);

        return redirect('articles');
        // return $input;
        // $input = Request::get('title');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

    // Test
    public function hello(){
        return view('articles.test');
    }
}
