<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/browse';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = array( 
            'username-reg.unique' => 'The Username has already been taken',
            'password-reg-confirm.same' => 'The Password confirmation does not match.', 
        );

        return Validator::make($data, [
            'username-reg' => 'required|max:255|unique:users,username',
            'password-reg' => 'required|min:6',
            'password-reg-confirm' => 'same:password'
        ],$messages);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username-reg' => $data['username'],
            'email' => $data['email'],
            'password-reg' => bcrypt($data['password']),
            'address' => $data['address'],
            'phone' => $data['phone']
        ]);
    }
}
