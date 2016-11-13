<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function addBasketOrder($restaurant_id, $food_id, Request $request)
    {
        if (Auth::check()) {
            $inc   = false;
            $items = $request->session()->get('basket.list', 'default');
            if (is_array($items) || is_object($items)) {
                $request->session()->forget('basket.list');
                foreach ($items as $item) {
                    if ($item['food_id'] == $food_id) {
                        ++$item['quantity'];
                        $inc = true;
                    }
                    $request->session()->push('basket.list', $item);
                }
            }
            if (!$inc) {
                $item                   = array();
                $item['food_name']      = DB::table('food_menu') ->where('food_id',$food_id) ->value('food_name');
                $item['price']          = DB::table('food_menu') ->where('food_id',$food_id) ->value('price');
                $item['food_id']        = $food_id;
                $item['restaurant_id']  = $restaurant_id;
                $item['quantity']       = 1;
                $item['extra']          = 0;
                $item['description']    = "";
                $request->session()->push('basket.list', $item);
            }
            return redirect()->back();
        } else {
            echo "Login First";
        }
    }

    public function addBasketOrderExtra($restaurant_id, $food_id, Request $request)
    {
        if (Auth::check()) {
            $inc   = false;
            $items = $request->session()->get('basket.list', 'default');
            if (is_array($items) || is_object($items)) {
                $request->session()->forget('basket.list');
                foreach ($items as $item) {
                    if ($item['food_id'] == $food_id) {
                        ++$item['quantity'];
                        $inc = true;
                    }
                    $request->session()->push('basket.list', $item);
                }
            }
            if (!$inc) {
                $item                   = array();
                $item['food_name']      = DB::table('food_menu') ->where('food_id',$food_id) ->value('food_name');
                $item['price']          = (DB::table('food_menu') ->where('food_id',$food_id) ->value('price')) + (DB::table('food_menu') ->where('food_id',$food_id) ->value('price_extra'));
                $item['food_id']        = $food_id;
                $item['restaurant_id']  = $restaurant_id;
                $item['quantity']       = 1;
                $item['extra']          = 0;
                $item['description']    = "";
                $request->session()->push('basket.list', $item);
            }
            return redirect()->back();
        } else {
            echo "Login First";
        }
    }

    public function showBasket(Request $request)
    {
        $values = $request->session()->get('basket.list', 'default');

        if (is_array($values) || is_object($values)) {
            foreach ($values as $item) {
                // echo $item['food_id'] . ':' . $item['quantity'];
                // echo "\r\n";
            }
        // dd($values);
        } else {
            echo "empty";
        }
        return view('checkout',['values'=>$values]);
    }

    public function clearBasket(Request $request){
        $request->session()->forget('basket.list');
        
        return redirect()->back();
    } 

}
