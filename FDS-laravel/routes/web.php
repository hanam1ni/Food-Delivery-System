<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Food;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$restaurants = Restaurant::orderBy('restaurant_id', 'asc')->get();

    return view('browse' , [
        'head' => 'Browse Restaurant',
    	'type' => 'all',
    	'restaurants' => $restaurants
    ]);
});

Route::get('/browse', function () {
    $restaurants = Restaurant::orderBy('restaurant_id', 'asc')->get();

    return view('browse' , [
        'head' => 'Browse Restaurant',
    	'type' => 'all',
    	'restaurants' => $restaurants
    ]);
});

Route::get('/browse/meal', function () {
    $restaurants = DB::table('restaurant')
                     ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
                     ->where('food_menu.meal', '=', 1)
                     ->groupBy('restaurant.restaurant_id')
                     ->get();

    return view('browse' , [
        'head' => 'Main Meal',
    	'type' => 'meal',
    	'restaurants' => $restaurants
    ]);
});



Route::get('/browse/vegan', function () {
    $restaurants = DB::table('restaurant')
                     ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
                     ->where('food_menu.vegan', '=', 1)
                     ->groupBy('restaurant.restaurant_id')
                     ->get();

    return view('browse' , [
        'head' => 'Vegetarian Food',
    	'type' => 'vegan',
    	'restaurants' => $restaurants
    ]);
});

Route::get('/browse/islamic', function () {
    $restaurants = DB::table('restaurant')
                     ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
                     ->where('food_menu.islamic', '=', 1)
                     ->groupBy('restaurant.restaurant_id')
                     ->get();

    return view('browse' , [
        'head' => 'Islamic Food',
    	'type' => 'islamic',
    	'restaurants' => $restaurants
    ]);
});

Route::get('/browse/dessert', function () {
    $restaurants = DB::table('restaurant')
                     ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
                     ->where('food_menu.dessert', '=', 1)
                     ->groupBy('restaurant.restaurant_id')
                     ->get();

    return view('browse' , [
        'head' => 'Dessert',
    	'type' => 'dessert',
    	'restaurants' => $restaurants
    ]);
});

Route::get('/browse/drink', function () {
    $restaurants = DB::table('restaurant')
                     ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
                     ->where('food_menu.drink', '=', 1)
                     ->groupBy('restaurant.restaurant_id')
                     ->get();

    return view('browse' , [
        'head' => 'Drink',
    	'type' => 'drink',
    	'restaurants' => $restaurants
    ]);
});

Route::get('/browse/filter/{restaurant_id}/{restaurant_name}/{type}', function ($restaurant_id,$restaurant_name,$type) {
    if($type != "all"){
        $foods = DB::table('food_menu')
                ->where('restaurant_id','=',$restaurant_id,'AND',$type,'=',1)
                ->get(); 

        return view('browse' , [
            'head' => $restaurant_name,
            'type' => 'filter',
            'foods' => $foods
        ]);
    }else{
        $foods = DB::table('food_menu')
                ->where('restaurant_id','=',$restaurant_id)
                ->get(); 

        return view('browse' , [
            'head' => $restaurant_name,
            'type' => 'filter',
            'foods' => $foods
        ]);
    }
});

Route::get('/browse/search/', function (Request $request) {
    $keyword = $request->input('search', 'Blank');

    $restaurants = DB::table('restaurant')
                     ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
                     ->where('food_menu.food_name', 'LIKE', '%'.$keyword.'%')
                     ->orWhere('restaurant.restaurant_name','LIKE','%'.$keyword.'%')
                     ->groupBy('restaurant.restaurant_id')
                     ->get();

    return view('browse' , [
            'head' => 'Search Result for '.$keyword,
            'type' => 'search',
            'restaurants' => $restaurants
    ]);               
});

Route::get('/sessionAdd', 'SessionController@add');
Route::get('/sessionShow', 'SessionController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/restaurant','restaurantController@index');

Route::get('/restaurant/{restaurant_id}','restaurantController@restaurant');

