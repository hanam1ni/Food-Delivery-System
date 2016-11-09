<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restaurantController extends Controller
{
    //
    public function index(){
    	return view('restaurant');
    }
}
/*
Route::get('/restaurant/{restaurant_id}', function ($restaurant_id) {
    return view('restaurant'.$restaurant_id);
});
*/