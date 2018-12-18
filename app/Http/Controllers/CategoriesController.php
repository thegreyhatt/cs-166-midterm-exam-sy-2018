<?php
namespace App\Http\Controllers;
use \App\Category;
use Request, Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function show($id)
    {
        $categories = Category::findorfail($id);
        return view('categories.show', compact('categories'));
    }
    public function store()
    {
        $inputs = Request::all();
        $categories = new Category;
        $err_msgs = [
            'name.required' => 'Category must have a name', 
        ];
        $validator = Validator::make(Request::all(), $categories->rules, $err_msgs);
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
        $category->rules = [
            'name' => 'required|unique:categories,name,'.$id,
        ];    
        $err_msgs = [
            'name.required' => 'Category must have a name', 
            'name.unique' => 'Category Name must be unique.', 
        ];
        $validator = Validator::make(Request::all(), $category->rules, $err_msgs);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }
        $Category = Category::find($id);
        $Category->fill(Request::all());
        $Category->save();
        return redirect('categories');
    }
    
}