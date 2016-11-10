<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food_menu';
	public $timestamps = false;
    protected $fillable = ['food_id','restaurant_id','food_name','meal','vegan','islamic','dessert','drink','price','price_extra'];
}
