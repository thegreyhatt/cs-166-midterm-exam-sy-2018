<?php

namespace App\Http\Controllers;
use \App\Product;
use \App\Category;
use DB;
use Request, Validator;

class ProductsController extends Controller
{
    public function index()
    {

        $products = Product::latest()->get();

    	return view('products.index', compact('products'));
    }

    public function create()

    {
        // :where('word_one', $word_id)->pluck('word_two')->toArray();
        $categories = Category::all()->where('confirmed', 1)->pluck('name')->toArray();
        return view('products.create')->with('categories', $categories);
    }

    public function show($id)
    {
        $product = Product::findorfail($id);
        $categories = Category::all()->where('confirmed', 1)->pluck('name')->toArray();
        return view('products.show', compact('product'))->with('categories', $categories);
    }

    public function store()
    {
    	$inputs = Request::all();
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required',
        ];

        $err_msgs = [
            'name.required' => 'Product must have a Name', 
            'name.min' => 'Product name must be atleast 3 characters.', 
            'description.required' => 'Product body is required.', 
        ];

        $validator = Validator::make(Request::all(), $rules, $err_msgs);

        if ($validator->fails()) {

            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }

        Product::create($inputs);
        $categories = Category::all()->where('confirmed', 1)->pluck('name')->toArray();
    	return redirect('products')->with('categories', $categories);
    }

    public function update($id)
    {
  
       $rules = [
            'name' => 'required|min:3',
            'description' => 'required',
        ];

        $err_msgs = [
            'name.required' => 'Product must have a Name', 
            'name.min' => 'Product name must be atleast 3 characters.', 
            'description.required' => 'Product body is required.', 
        ];

        $validator = Validator::make(Request::all(), $rules, $err_msgs);

        if ($validator->fails()) {

            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }

        $product = Product::find($id);
        $product->fill(Request::all());
        $product->save();

        $categories = Category::all()->where('confirmed', 1)->pluck('name')->toArray();
        return redirect('products')->with('categories', $categories);

    }
  

}
