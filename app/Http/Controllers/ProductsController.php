<?php

namespace App\Http\Controllers;

use \App\Products;
use \App\Category;
use Request, Validator;
use DB;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller
{
    public function index()
    {
        $products= Products::latest()->get();
    	return view('products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::pluck('name', 'id');
    	return view('products.create',compact('categories'));
    }
    public function show($id)
    {
        $product = Products::findorfail($id);
       
        return view('products.show', compact('product'));
    }

    public function store()
    {
        
        $inputs = Request::all();
        $rules = [
            'name' => 'required|unique:categories',
            'description' => 'required',
            'wholesale_price'=>'required',
            'retail_price'=>'required|greater_than_field:wholesale_price',


        ];

        $err_msgs = [
            'name.required' => 'Product must have a name', 
            'name.min' => 'Product name must be atleast 3 characters.', 
            'description.required' => 'Product description is required.', 
            'wholesale_price.required' =>  'Product wholesale price is required.', 
            'retail_price.required' =>  'Product retail price is required.', 
            'retail_price.greater_than_field:wholesale_price' => 'must be greater'

        ];

      
        $validator = Validator::make(Request::all(), $rules, $err_msgs);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }
    
        

        Products::create($inputs);
    	return redirect('products');
    }

    public function update($id)
    {
         $inputs = Request::all();
        $rules = [
            'name' => 'required|unique:categories',
            'description' => 'required',
            'wholesale_price'=>'required',
            'retail_price'=>'required|greater_than_field:wholesale_price',


        ];

        $err_msgs = [
            'name.required' => 'Product must have a name', 
            'name.min' => 'Product name must be atleast 3 characters.', 
            'description.required' => 'Product description is required.', 
            'wholesale_price.required' =>  'Product wholesale price is required.', 
            'retail_price.required' =>  'Product retail price is required.', 
            'retail_price.greater_than_field:wholesale_price' => 'must be greater'

        ];

      
        $validator = Validator::make(Request::all(), $rules, $err_msgs);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }

        $product = Products::find($id);

        $product->fill(Request::all());
        $product->save();
        return redirect('products');
    }
}
