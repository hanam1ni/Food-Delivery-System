<?php





use Illuminate\Support\Facades\DB;
use App\Restaurant;
use Illuminate\Http\Request;



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

    return view('browse', [
        'head'        => 'Browse Restaurant',
        'type'        => 'all',
        'restaurants' => $restaurants,
    ]);
});

Route::get('/browse', function () {
    $restaurants = Restaurant::orderBy('restaurant_id', 'asc')->get();

    return view('browse', [
        'head'        => 'Browse Restaurant',
        'type'        => 'all',
        'restaurants' => $restaurants,
    ]);
});

Route::get('/browse/meal', function () {
    $restaurants = DB::table('restaurant')
        ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
        ->where('food_menu.meal', '=', 1)
        ->groupBy('restaurant.restaurant_id')
        ->get();

    return view('browse', [
        'head'        => 'Main Meal',
        'type'        => 'meal',
        'restaurants' => $restaurants,
    ]);
});

Route::get('/browse/vegan', function () {
    $restaurants = DB::table('restaurant')
        ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
        ->where('food_menu.vegan', '=', 1)
        ->groupBy('restaurant.restaurant_id')
        ->get();

    return view('browse', [
        'head'        => 'Vegetarian Food',
        'type'        => 'vegan',
        'restaurants' => $restaurants,
    ]);
});



Route::get('/browse/islamic', function () {
    $restaurants = DB::table('restaurant')
        ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
        ->where('food_menu.islamic', '=', 1)
        ->groupBy('restaurant.restaurant_id')
        ->get();

    return view('browse', [
        'head'        => 'Islamic Food',
        'type'        => 'islamic',
        'restaurants' => $restaurants,
    ]);
});

Route::get('/browse/dessert', function () {
    $restaurants = DB::table('restaurant')
        ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
        ->where('food_menu.dessert', '=', 1)
        ->groupBy('restaurant.restaurant_id')
        ->get();

    return view('browse', [
        'head'        => 'Dessert',
        'type'        => 'dessert',
        'restaurants' => $restaurants,
    ]);
});

Route::get('/browse/drink', function () {
    $restaurants = DB::table('restaurant')
        ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
        ->where('food_menu.drink', '=', 1)
        ->groupBy('restaurant.restaurant_id')
        ->get();

    return view('browse', [
        'head'        => 'Drink',
        'type'        => 'drink',
        'restaurants' => $restaurants,
    ]);
});

Route::get('/foo', function () {
	$email = DB::table('users')->where('username', 'test3')->value('email');
	echo $email;
});

Route::get('/browse/filter/{restaurant_id}/{restaurant_name}/{type}', function ($restaurant_id, $restaurant_name, $type) {
    if ($type != "all") {
        $foods = DB::table('food_menu')
            ->where('restaurant_id', '=', $restaurant_id, 'AND', $type, '=', 1)
            ->get();

        return view('browse', [
            'head'   => $restaurant_name,
            'type'   => 'filter',
            'foods'  => $foods,
            'res_id' => $restaurant_id,
        ]);
    } else {
        $foods = DB::table('food_menu')
            ->where('restaurant_id', '=', $restaurant_id)
            ->get();

        return view('browse', [
            'head'   => $restaurant_name,
            'type'   => 'filter',
            'foods'  => $foods,
            'res_id' => $restaurant_id,
        ]);
    }
});

Route::get('/browse/search/', function (Request $request) {
    $keyword = $request->input('search', 'Blank');

    $restaurants = DB::table('restaurant')
        ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
        ->where('food_menu.food_name', 'LIKE', '%' . $keyword . '%')
        ->orWhere('restaurant.restaurant_name', 'LIKE', '%' . $keyword . '%')
        ->groupBy('restaurant.restaurant_id')
        ->get();

    return view('browse', [
        'head'        => 'Search Result for ' . $keyword,
        'type'        => 'search',
        'restaurants' => $restaurants,
    ]);
});

Route::get('/basket/add/{restaurant_id}/{food_id}', 'BasketController@addBasketOrder');
Route::get('/basket/show', 'BasketController@showBasket');
Route::get('/sessionAdd', 'SessionController@add');
Route::get('/sessionShow', 'SessionController@show');


Auth::routes();

Route::get('/home', 'HomeController@index');

//payment

Route::get('/payment', 'paymentcontroller@index');

Route::get('/payment/{cost}', 'paymentcontroller@indexWithCost');

Route::post('/test', 'paymentController@testfunction');

Route::post('/payment/addAddress2', 'paymentController@addAddress2');

Route::post('/payment/transfer','paymentController@transfer');


Route::get('/bank/{cost}',[
	'uses'=>'bankAccountController@index2',	
	'as'=> 'pay',
]);


Route::post('/bank/bankSend',[
	'uses'=>'bankAccountController@send',	
	'as'=> 'pay',
]);

