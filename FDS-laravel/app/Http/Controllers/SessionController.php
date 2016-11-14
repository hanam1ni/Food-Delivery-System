<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    public function add(Request $request){
    	if(Auth::check()){
    		$request->session()->push('basket.menu', 'menu1');
	    	$request->session()->push('basket.menu', 'menu2');
	    	$request->session()->push('basket.menu', 'menu3');
	    	$request->session()->push('basket.user', Auth::user()->username);
	    	echo "Success";
    	}
    	else{
    		echo "Login First";
    	}
    }

    public function show(Request $request){
    	$values = $request->session()->get('basket.menu', 'default');
    	if (is_array($values) || is_object($values))
        {
            foreach ($values as $item)
            {
                echo $item;
            }
        }else{
    		echo "empty";
        }
    }
}
