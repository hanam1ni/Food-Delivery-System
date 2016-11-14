<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use log;
use Ixudra\Curl\Facades\Curl;
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
    public function index2($cost ,$address)
    {
        return view('bankAccout',['cost' => $cost,'addresses' => $address]);
        //return view('bankAccout',['address' => $request]);
    }

    public function send(Request $request){
        // Create a client with a base URI
        /*$url = "http://161.246.70.75:8080/cesebank/api/service.php";

        $otp = $request->otp;
        $amount = $request->Amount;
        $from = "1327000003";
        $to = "1327100002";

        $response = Curl::to($url)
            ->withData( array(  'shop_Account'  => $from, 
                                'cus_Account'   => $to,
                                'Amount'        => $amount,
                                'otp'           => $otp
                ))
            ->asJson()
            ->post();*/


        /*                      
        * "shop_Account": "1327000003",
        * "cus_Account": "1327100002",
        * "Amount": cost,
        * "otp": "1072649"
        */

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
