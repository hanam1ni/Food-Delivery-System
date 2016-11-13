<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

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
                $item                  = array();
                $item['food_id']       = $food_id;
                $item['restaurant_id'] = $restaurant_id;
                $item['quantity']      = 1;
                $item['extra']         = 0;
                $item['description']   = "";
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
                echo $item['food_id'] . ':' . $item['quantity'];
                echo "<br>";
            }
        } else {
            echo "empty";
        }
    }
}
