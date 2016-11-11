<?php




use Illuminate\Support\Facades\DB;
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
    	'type' => 'Browse Restaurant',
    	'restaurants' => $restaurants
    ]);
});

Route::get('/browse', function () {
    $restaurants = Restaurant::orderBy('restaurant_id', 'asc')->get();

    return view('browse' , [
    	'type' => 'Browse Restaurant',
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
    	'type' => 'Main Meal',
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
    	'type' => 'Vegetarian Food',
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
    	'type' => 'Islamic Food',
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
    	'type' => 'Dessert',
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
    	'type' => 'Drink',
    	'restaurants' => $restaurants
    ]);
});


Route::get('/payment', 'paymentcontroller@index');

Route::post('/test', 'paymentController@testfunction');

Route::post('/payment/addAddress2', 'paymentController@addAddress2');

Route::post('/payment/transfer','paymentController@transfer');

Route::get('/bank',[
	'uses'=>'bankAccountController@index',	
	'as'=> 'bank',
]);

Route::post('/Withdraw',[
        'uses'=>'bankAccountController@index',
        'as'=>'Withdraw',
]);

Route::get('/foo', function () {
	$email = DB::table('users')->where('username', 'test3')->value('email');
	echo $email;
});


Auth::routes();

Route::get('/home', 'HomeController@index');

