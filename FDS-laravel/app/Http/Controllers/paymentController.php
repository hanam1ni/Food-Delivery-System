<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use log;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $values = $request->session()->get('basket.menu', 'default');
        return view('payment',['foods' => $values]);
        /*$tasks = Task::orderBy('created_at', 'asc')->get();

        return view('payment',[
            'payment' => $tasks
        ]);*/
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

    public function addAddress1()
    {
        DB::table('users')
            ->where('id', 1)
            ->update(['phone' => "0851234567"]);
        //console.log("hello world");
        //echo "hello";
        //echo $request->name2;
    }

    public function addAddress2(Request $request)
    {
        DB::table('users')
            ->where('id', 1)
            ->update(['phone' => "0812345678"]);
        //echo $request->name2;
    }



    public function testfunction(Request $request)
    {
        /*DB::table('users')
            ->where('id', 2)
            ->update(['phone' => '0851234567']);*/
        if ($request->isMethod('post')){
            DB::table('users')
                ->where('username', $request->username)
                ->update([
                    'address' => $request->address1, 
                    'address2' => $request->address2,
                    'address3' => $request->address3]);
            return response()->json(['response' => 'This is post method']); 
        }
        DB::table('users')
            ->where('id', 2)
            ->update(['phone' => "0851234567"]);
        return response()->json(['response' => 'This is get method']);
    }
    public function transfer(Request $request)
    {
        //how to change page from this controller?
        return redirect()->route('Withdraw');
    }
}
