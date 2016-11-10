<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Restaurant;

class restaurantController extends Controller
{
    //
    public function index(){
    	$restaurant = DB::table('restaurant')->where('restaurant_id',1)->get();
    	return view('restaurant',['restaurants' => $restaurant]);
    }

    public function restaurant($restaurant_id){
    	$restaurant = DB::table('restaurant')->where('restaurant_id',$restaurant_id)->get();
	    return view('restaurant',['restaurants' => $restaurant]);
    }
}
/*
Route::get('/restaurant/{restaurant_id}', function ($restaurant_id) {
    return view('restaurant'.$restaurant_id);
});
*/