<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\PPIpn;
use App\Models\PaypalIPN;
use App\Models\Au;

class Ipn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Log::debug($request);
        $pp = new PPIpn;
	    $pp->ipn = $request->all();        
        $pp->save();
        $ipn = new PaypalIPN();
        $vresult = $ipn->verifyIPN($request->all());
        if ($vresult) {
            Log::debug('Check success: ' . $request->input('payment_gross'));
            //$user = Au::where('_id',$request->input('custom'))->get();
            $user = Au::find($request->input('custom'));
            //Log::debug($user);
            $credit_numbers = $user->credit;
            $total =  $credit_numbers + $request->input('payment_gross');
            //Log::debug('To user with id ' . $request->input('custom') . ' (' . $user->email . ') ' . ' set credit number ' . $credit_numbers . ' + ' . $request->input('payment_gross') . ' (' . $total .  ')');
            $user->credit = $total;
            $user->save();
        } else {
            Log::debug('Check false');
        }
        
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
