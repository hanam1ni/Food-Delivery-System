<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Auth;
use back;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class restaurantController extends Controller
{
    /*public function index(){
    $restaurant = DB::table('restaurant')   -> where('restaurant_id',1)
    -> get();
    $food = DB::table('food_menu')          -> where('restaurant_id',1)
    -> get();
    return view('restaurant',['restaurants' => $restaurant,'foods' => $food]);
    }*/

    public function restaurant($restaurant_id, Request $request)
    {
        $restaurant = DB::table('restaurant')->where('restaurant_id', $restaurant_id)
            ->get();
        $food = DB::table('food_menu')->where('restaurant_id', $restaurant_id)
            ->get();
        $comment = DB::table('comment')->join('users', 'comment.user_id', '=', 'users.id')
            ->where('restaurant_id', $restaurant_id)
            ->get();
        $values = $request->session()->get('basket.list', 'default');
        if (is_array($values) || is_object($values)) {} else {
            $values = "NULL";
        }
        return view('restaurant', ['restaurants' => $restaurant,
            'foods'                                  => $food,
            'restaurant_id'                          => $restaurant_id,
            'comments'                               => $comment,
            'values'                                 => $values]);
    }

    public function comment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $comment                = new \App\comment;
        $comment->user_id       = Auth::user()->id;
        $comment->restaurant_id = $request->restaurant_id;
        $comment->comment       = $request->name;
        $comment->rating        = $request->rating;
        $comment->save();

        return redirect()->back();
    }
}
