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
    	return view('products.create');
        $categories = Category::all()->where('confirmed', 1)->pluck('name')->toArray();
        return view('products.create')->with('categories', $categories);
    }

    public function show($id)
    {
        $products = Product::findorfail($id);
		$categories = Category::all()->where('confirmed', 1)->pluck('name')->toArray();
        return view('products.show', compact('product'))->with('categories', $categories);;
    }

    public function store()
    {
    	$inputs = Request::all();

        $rules = [
            'name' => 'required|min:3',
            'description' => 'required',
            'wholesale_price' => 'required',
            'retail_price' => 'required',
        ];

        $err_msgs = [
            'name.required' => 'Product must have a name', 
            'name.min' => 'Name must be atleast 3 characters.', 
            'description.required' => 'Description is required.',
            'wholesale_price.required' => 'Wholesale price is required',
            'retail_price.required' => 'Retail price is required',
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
            'wholesale_price' => 'required',
            'retail_price' => 'required',
        ];

        $err_msgs = [
            'name.required' => 'Product must have a name', 
            'name.min' => 'Name must be atleast 3 characters.', 
            'description.required' => 'Description is required.',
            'wholesale_price.required' => 'Wholesale price is required',
            'retail_price.required' => 'Retail price is required',
        ];

        $validator = Validator::make(Request::all(), $rules, $err_msgs);

        if ($validator->fails()) {

            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }
        $products = Product::find($id);
        $products->fill(Request::all());
        $products->save();
        $categories = Category::all()->where('confirmed', 1)->pluck('name')->toArray();
        return redirect('products')->with('categories', $categories);
    }

}