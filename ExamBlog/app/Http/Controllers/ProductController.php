<?php

namespace App\Http\Controllers;
use Request;
use\App\Product;
Use\Validator;

class ProductController extends Controller
{
    public function index()
    {
      $products= Product::all();
      return view('products.index', compact('products'));
    }
     public function create()
   {
      return view('products.create');
   }
    public function show($id)
   {

    // return $id;
      $products = Product::findorfail($id);

      return view('products.show', compact('products'));
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
       Product::create($inputs);
       return redirect('blogs');
       }
       public function edit($id){
         $rules=[
          'title' =>'required|min:3',
          'body' =>'required',
        ];
        $err_msgs =[
          'title.required' =>'Product must have a title',
          'title.min' => 'Product title must be atleast 3 charaters',
          'body.required' => 'Product body is required',
        ];
        $validator=Validator::make(Request::all(), $rules,$err_msgs);
        if($validator->fails()){
          return redirect()->back()
              ->withInput(Request::all())
              ->withErrors($validator);
        }
        
       
        $products=Product:find($id);
        $products->fill(Request::all());
        $products->save();
        return redirect('products');
       }
       public function category($category){
       
        $products = products_db::table('products')->where('products', $category)->get();
        return view('products.category', compact('products'));
       }
     
}
