<?php

namespace App\Http\Controllers;

use App\OrderFood;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function showOrder()
    {
        return view('status');
    }

    public function sendOrder(Request $request)
    {
    	$values = $request->session()->get('basket.list', 'default');
        foreach ($values as $value) {
            $newOrder                = new OrderFood;
            $newOrder->order_id		 = Auth::user()->id;
            $newOrder->food_id       = $value['food_id'];
            $newOrder->restaurant_id = $value['restaurant_id'];
            $newOrder->user_id       = Auth::user()->id;
            $newOrder->order_status  = 0;
            $newOrder->save();
        }
        $request->session()->forget('basket.list');
        return redirect('/order/view/');
    }
}
