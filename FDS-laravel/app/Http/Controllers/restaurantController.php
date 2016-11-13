<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Restaurant;

class restaurantController extends Controller
{
    public function index(){
    	$restaurant = DB::table('restaurant')   -> where('restaurant_id',1)
                                                -> get();
        $food = DB::table('food_menu')          -> where('restaurant_id',1)
                                                -> get();
    	return view('restaurant',['restaurants' => $restaurant,'foods' => $food]);
    }

    public function restaurant($restaurant_id){
    	$restaurant = DB::table('restaurant')   -> where('restaurant_id',$restaurant_id)
                                                -> get();
        $food = DB::table('food_menu')          -> where('restaurant_id',$restaurant_id)
                                                -> get();
	    return view('restaurant',['restaurants' => $restaurant,'foods' => $food]);
    }
}