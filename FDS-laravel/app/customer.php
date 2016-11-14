<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Customer extends Model implements Authenticatable
{
	use AuthenticableTrait;
	protected $table = 'customer';
	public $timestamps = false;
    protected $fillable = ['user_id','username','email','address','password'];
    protected $hidden = ['password', 'remember_token'];
}
