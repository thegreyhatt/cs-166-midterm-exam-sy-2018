<?php

namespace App\Http\Controllers;
use Request;
use\App\Article;
use Validator;

class ArticleController extends Controller
{
    public function index()
    {
    	//return 'All articles here';
    	$articles = Article::all();
    	//$articles = Article::latest()->get();
    	//$articles = Article::latest()->toSql();
    	return view('articles.index', compact('articles'));
  	}
    public function create()
   {
   		return view('articles.create');
   }

    public function show($id)
   {

    // return $id;
      $article = Article::findorfail($id);

      return view('articles.show', compact('article'));
   }


    public function store()
   {

    	$inputs = Request::all();
      
      $rules = [
        'title' => 'required|min:3',
        'body' => 'required',
      ];
      $err_msgs = [
        'title.required' => 'Article must have a title',
        'title.min' => 'Article title must have atleast 3 character',
        'body.required' => 'Article body is required',
      ];

      $validator = Validator::make(Request::all(), $rules, $err_msgs);

      if($validator->fails()){
        return redirect()->back()
          ->withInput(Request::all())
          ->withErrors($validator);
      }

      $article = New Article;
      $article->title = $inputs['title'];
      $article->body = $inputs['body'];
      $article->save();

    	return redirect('articles');
   }

public function edit($id)
   {                              
    $article = Article::find($id);
    $article->fill(Request::all());
    $article->save();

  $rules = [
        'title' => 'required|min:3',
        'body' => 'required',
      ];
      $err_msgs = [
        'title.required' => 'Article must have a title',
        'title.min' => 'Article title must have atleast 3 character',
        'body.required' => 'Article body is required',
      ];

      $validator = Validator::make(Request::all(), $rules, $err_msgs);

      if($validator->fails()){
        return redirect()->back()
          ->withInput(Request::all())
          ->withErrors($validator);
      }
      
    // $article->title = $input['title'];
    // $article->body = $input['body'];

     return redirect('articles');
}

 }
