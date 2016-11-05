<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Hash;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function doRegister()
    {
        $rules = array(
            'address'    => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('register')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
             $userdata = array(
                'user_id'    =>  "000000",
                'username'     => Input::get('username'),
                'email'     => Input::get('email'),
                'password'  => Hash::make(Input::get('password')),
                'address'   => Input::get('address')
             );

            $customer = new Customer;
            $customer = Customer::create($userdata);
        }
    }
}