<?php

namespace App\Http\Controllers;
use Request;
use\App\Blog;
Use\Validator;

class BlogController extends Controller
{
    public function index()
    {
      $blogs = Blog::all();
      return view('blogs.index', compact('blogs'));
    }
     public function create()
   {
      return view('blogs.create');
   }
    public function show($id)
   {

    // return $id;
      $blogs = Blog::findorfail($id);

      return view('blogs.show', compact('blogs'));
   }
      public function store(){
       $inputs=Request::all();
         $rules=[
          'title' =>'required|min:3',
          'body' =>'required',
        ];
        $err_msgs =[
          'title.required' =>'Article must have a title',
          'title.min' => 'Article title must be atleast 3 charaters',
          'body.required' => 'Article body is required',
        ];
        $validator=Validator::make(Request::all(), $rules,$err_msgs);
        if($validator->fails()){
          return redirect()->back()
              ->withInput(Request::all())
              ->withErrors($validator);
        }
       Blog::create($inputs);
       return redirect('blogs');
       }
       public function edit($id){
         $rules=[
          'title' =>'required|min:3',
          'body' =>'required',
        ];
        $err_msgs =[
          'title.required' =>'Article must have a title',
          'title.min' => 'Article title must be atleast 3 charaters',
          'body.required' => 'Article body is required',
        ];
        $validator=Validator::make(Request::all(), $rules,$err_msgs);
        if($validator->fails()){
          return redirect()->back()
              ->withInput(Request::all())
              ->withErrors($validator);
        }
        
       
        $blogs=Blog::find($id);
        $blogs->fill(Request::all());
        $blogs->save();
        return redirect('blogs');
       }
       public function category($category){
       
        $blogs = blog_db::table('blogs')->where('category', $category)->get();
        return view('blogs.category', compact('blogs'));
       }
     
}
