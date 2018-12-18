<?php

namespace App\Http\Controllers;
use \App\Blogs;
use Request, Validator;

class ExamController extends Controller
{
     public function index(){

    	 $exams=Exam::latest()->get();
    	 return view('exams.index', compact('exams'));
       
    }

     public function show($id){

      	$exams=Exam::findorfail($id);
      	return view('exams.show',compact('exams'));
      }

      public function create(){

      	return view('exams.create');
      }


      public function store(){

       $inputs=Request::all();

       Exam::create($inputs);

       return redirect('exams');

       }

       public function edit($id){
       
        $exams=Exam::find($id);
        $exams->fill(Request::all());
        $exams->save();

        return redirect('exams');
       }

       public function category($category){
       
        $blogs = DB::table('exams')->where('category', $category)->get();

        return view('exams.category', compact('exams'));
       }

     
}
