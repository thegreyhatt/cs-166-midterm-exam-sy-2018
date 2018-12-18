<?php

namespace App\Http\Controllers;

use \App\Category;
use Request, Validator;

class CategoryController extends Controller
{
  

    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
       
        return view('categories.create', compact('categories'));
    }
    public function show($id)
    {
        $category = Category::findorfail($id);
        return view('categories.show', compact('category'));
    }
    public function store()
    {
        $inputs = Request::all();
        $rules = [
            'name' => 'required|unique:categories',
            'description' => 'required',


        ];
        $err_msgs = [
            'name.required' => 'Category must have a name', 
            'name.min' => 'Category name must be atleast 3 characters.', 
            'description.required' => 'Category description is required.', 

        ];
        $validator = Validator::make(Request::all(), $rules, $err_msgs);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }
        Category::create($inputs);
        return redirect('categories');
    }
    
    public function update($id)
    {
        $category = Category::find($id);
         $inputs = Request::all();
        $rules = [
            'name' => 'required|unique:categories',
            'description' => 'required',

        ];
        $err_msgs = [
            'name.required' => 'Category must have a name', 
            'name.min' => 'Category name must be atleast 3 characters.', 
            'description.required' => 'Category description is required.', 

        ];
        $validator = Validator::make(Request::all(), $rules, $err_msgs);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }
        
        $category->fill(Request::all());
        $category->save();
        return redirect('categories');
    }
}
