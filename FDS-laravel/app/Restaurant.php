<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurant';
	public $timestamps = false;
    protected $fillable = ['restaurant_id','restaurant_name','restaurant_phone','restaurant_address'];
}
