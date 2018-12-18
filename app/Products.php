<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'description', 'wholesale_price', 'retail_price'];
    public function category(){
        return $this->hasOne('App\Category');
    }
}