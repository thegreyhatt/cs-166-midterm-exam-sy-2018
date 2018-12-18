<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $fillable = ['name', 'description', 'wholesale_price','retail_price','category'];
}
