<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Restaurant;
use back;
use Auth;

class restaurantController extends Controller
{
    /*public function index(){
    	$restaurant = DB::table('restaurant')   -> where('restaurant_id',1)
                                                -> get();
        $food = DB::table('food_menu')          -> where('restaurant_id',1)
                                                -> get();
    	return view('restaurant',['restaurants' => $restaurant,'foods' => $food]);
    }*/

    public function restaurant($restaurant_id){
    	$restaurant = DB::table('restaurant')   -> where('restaurant_id',$restaurant_id)
                                                -> get();
        $food = DB::table('food_menu')          -> where('restaurant_id',$restaurant_id)
                                                -> get();
        $comment = DB::table('comment')         -> join('users', 'comment.user_id', '=', 'users.id')
                                                -> where('restaurant_id',$restaurant_id)
                                                -> get();                                      
	    return view('restaurant',['restaurants' => $restaurant,
                                  'foods'       => $food,
                                  'restaurant_id'=>$restaurant_id,
                                  'comments'    => $comment]);
    }

    public function comment(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $comment = new \App\comment;
        $comment->user_id =  Auth::user()->id;
        $comment->restaurant_id = $request->restaurant_id;
        $comment->comment = $request->name;
        $comment->rating = $request->rating;
        $comment->save();

        return redirect()->back();
    }
}