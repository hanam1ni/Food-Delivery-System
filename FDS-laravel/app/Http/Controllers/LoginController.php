<?php

namespace App\Http\Controllers;

use Validator;
use Hash;
use Auth;
use App\Customer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{


    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function doLogin()
    {
        $logindata = array(
            'username'     => Input::get('username'),
            'password'  => Input::get('password')
         );

        if (Auth::attempt($logindata))
        {
            if(Auth::check()){
                return Redirect::intended('/');
            }
        }else
        {
            return Redirect::intended('login');
        }
    }
}