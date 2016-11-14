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
Auth::routes();

Route::get('/', 'browseController@showRestaurant');
Route::get('/browse', 'browseController@showRestaurant');
Route::get('/browse/meal', 'browseController@showMeal');
Route::get('/browse/vegan', 'browseController@showVegan');
Route::get('/browse/islamic', 'browseController@showIslamic');
Route::get('/browse/dessert', 'browseController@showDessert');
Route::get('/browse/drink', 'browseController@showDrink');
Route::get('/browse/filter/{restaurant_id}/{restaurant_name}/{type}', 'browseController@showFilter');
Route::get('/browse/search/', 'browseController@showSearch');

Route::post('/payment/{total}',[
    'uses' => 'paymentController@indexWithCost',
    'as'   => 'payment'
    ]);

Route::get('/basket/add/{restaurant_id}/{food_id}', 'BasketController@addBasketOrder');
Route::get('/basket/show', 'BasketController@showBasket');
Route::get('/basket/clear', 'BasketController@clearBasket');
Route::get('/sessionAdd', 'SessionController@add');
Route::get('/sessionShow', 'SessionController@show');

Route::get('/home', 'HomeController@index');

Route::get('/checkoutpage',[

    'uses' => 'BasketController@viewcheckout',
    'as'   => 'checkoutpage'

    ]);

Route::get('/checkout', [
    'uses' => 'BasketController@showBasket',
    'as'   => 'checkout' 
    ]);

Route::get('/browse/checkout', 'BasketController@showBasket');

Route::get('/browse/checkout/clear', 'BasketController@clearBasket');

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


Route::get('/bank/bankSend',[
	'uses'=>'bankAccountController@send',	
	'as'=> 'pay',
]);


Route::get('/restaurant/{restaurant_id}','restaurantController@restaurant');
Route::post('/restaurant/{restaurant_id}/comment','restaurantController@comment');
Route::get('/bank/bankSend/test','bankAccountController@create');
Route::get('/bank/bankSend/test/{account}/{amount}/{otp}','bankAccountController@create');
Route::get('/banksend','bankAccountController@create');


