<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
    	$articles = Article::latest('published_at')->get();
    	// return $articles;
    	return view('articles.index', compact('articles'));
    	// return view('article.index')->with('articles', $articles);	
    }

    public function show($id)
    {
        // dd('show');
    	// return $id;
    	$article = Article::findOrFail($id);
    	return view('articles.show', compact('article'));
    	// return $article;
    }
    // Create method
    public function create(){
        // dd('show');
        return view('articles.create');
    }

    public function store()
    {
        // $input = Request::get('title');
        $input = Request::All();
        $input['published_at'] = Carbon::now();

        Article::create($input);
        return redirect('articles');
        // return $input;
    }
}
