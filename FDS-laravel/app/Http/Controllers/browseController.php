<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class browseController extends Controller
{
    public function showRestaurant(Request $request)
    {
        $restaurants = Restaurant::orderBy('restaurant_id', 'asc')->get();
        $values      = $request->session()->get('basket.list', 'default');
        if (is_array($values) || is_object($values)) {}else{
        	$values = "NULL";
        }
        return view('browse', [
            'head'        => 'Browse Restaurant',
            'type'        => 'all',
            'restaurants' => $restaurants,
            'values'      => $values,
        ]);
    }

    public function showMeal(Request $request)
    {
        $restaurants = DB::table('restaurant')
            ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
            ->where('food_menu.meal', '=', 1)
            ->groupBy('restaurant.restaurant_id')
            ->get();

        $values = $request->session()->get('basket.list', 'default');

        return view('browse', [
            'head'        => 'Main Meal',
            'type'        => 'meal',
            'restaurants' => $restaurants,
            'values'      => $values,
        ]);
    }

    public function showVegan(Request $request)
    {
        $restaurants = DB::table('restaurant')
            ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
            ->where('food_menu.vegan', '=', 1)
            ->groupBy('restaurant.restaurant_id')
            ->get();

        $values = $request->session()->get('basket.list', 'default');
        return view('browse', [
            'head'        => 'Vegetarian Food',
            'type'        => 'vegan',
            'restaurants' => $restaurants,
            'values'      => $values,
        ]);
    }

    public function showIslamic(Request $request)
    {
        $restaurants = DB::table('restaurant')
            ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
            ->where('food_menu.islamic', '=', 1)
            ->groupBy('restaurant.restaurant_id')
            ->get();

        $values = $request->session()->get('basket.list', 'default');
        return view('browse', [
            'head'        => 'Islamic Food',
            'type'        => 'islamic',
            'restaurants' => $restaurants,
            'values'      => $values,
        ]);
    }

    public function showDessert(Request $request)
    {
        $restaurants = DB::table('restaurant')
            ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
            ->where('food_menu.dessert', '=', 1)
            ->groupBy('restaurant.restaurant_id')
            ->get();

        $values = $request->session()->get('basket.list', 'default');
        return view('browse', [
            'head'        => 'Dessert',
            'type'        => 'dessert',
            'restaurants' => $restaurants,
            'values'      => $values,
        ]);
    }

    public function showDrink(Request $request)
    {
        $restaurants = DB::table('restaurant')
            ->join('food_menu', 'food_menu.restaurant_id', '=', 'restaurant.restaurant_id')
            ->where('food_menu.drink', '=', 1)
            ->groupBy('restaurant.restaurant_id')
            ->get();

        $values = $request->session()->get('basket.list', 'default');
        return view('browse', [
            'head'        => 'Drink',
            'type'        => 'drink',
            'restaurants' => $restaurants,
            'values'      => $values,
        ]);
    }

    public function showFilter($restaurant_id, $restaurant_name, $type, Request $request)
    {
        $values = $request->session()->get('basket.list', 'default');

        if ($type != "all") {
            $foods = DB::table('food_menu')
                ->where('restaurant_id', '=', $restaurant_id, 'AND', $type, '=', 1)
                ->get();

            return view('browse', [
                'head'   => $restaurant_name,
                'type'   => 'filter',
                'foods'  => $foods,
                'res_id' => $restaurant_id,
                'values' => $values,
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
                'values' => $values,
            ]);
        }
    }

    public function showSearch(Request $request)
    {
        $keyword = $request->input('search', 'Blank');
        $values = $request->session()->get('basket.list', 'default');

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
            'values' => $values,
        ]);
    }
}
