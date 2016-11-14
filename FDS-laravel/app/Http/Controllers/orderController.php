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
        $request->session()->forget('basket.list');
        return redirect('/order/view/');
    }
}
