<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
        protected $fillable = ['name', 'description', 'show/hide'];
        public $rules = ['name' => 'required|unique:categories',];
}
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Products');
    // }
