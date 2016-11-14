<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use log;
use Ixudra\Curl\Facades\Curl;
use Ixudra\Curl\CurlServiceProvider;
use back;
class bankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        echo "hello";
        $address = $request->address;
        //return view('bankAccout',['addresses' => 'address']);
        //return view('bankAccout',['address' => $request]);
    }
    public function index2($cost)
    {
        return view('bankAccout',['cost' => $cost]);
        //return view('bankAccout',['address' => $request]);
    }

    public function send(Request $request){
        // Create a client with a base URI
        $url = "http://161.246.70.75:8080/cesebank/api/service.php";

        $otp = "";
        $amount = "";
        $from = "1327000003";
        $to = "1327100002";

        $values = $request->session()->get('basket.list', 'default');
        dd($values);

        $response = Curl::to('http://161.246.70.75:8080/cesebank/api/service.php')
            ->withData( array(  'shop_Account'  => '1327100009',
                                'cus_Account'   => '1327000010',
                                'Amount'        => 915.80,
                                'otp'           => 376815
                ))
            ->asJson()
            ->post();

        if (is_array($response) || is_object($response)) {
            dd($response);
        }
        else{
            echo "string";
        }

        /*                      
            "shop_Account"=> "1327000003",
            "cus_Account"=> "1327100002",
            "Amount"=> 450.00,
            "otp"=> "1072649"
        */

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($account, $amount, $otp)
    {
        //
        $amount = (float)$amount;
        $otp    = (int)$otp;


        $response = Curl::to('http://161.246.70.75:8080/cesebank/api/service.php')
            ->withData( array(  'shop_Account'  => '1327100009',
                                'cus_Account'   => $account,
                                'Amount'        => $amount,
                                'otp'           => $otp
                ))
            ->asJson()
            ->post();
            
        if (is_array($response) || is_object($response)) {
            echo "transaction fail check your OTP";
            echo $amount;
            echo $otp;
            echo $account;
            echo gettype($amount);
            echo gettype($otp);
            echo redirect()->back();
        }
        else{
            return redirect()->back();
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
