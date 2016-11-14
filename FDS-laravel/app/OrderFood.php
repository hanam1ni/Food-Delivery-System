<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderFood extends Model
{
    protected $table = 'order_food';
	public $timestamps = false;
    protected $fillable = ['id','order_id','food_id','restaurant_id','user_id','order_status'];
}