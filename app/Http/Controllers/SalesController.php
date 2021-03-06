<?php

namespace App\Http\Controllers;

use App\User;
use App\Sales;
use App\Job;
use App\Lead;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $users = User::all();
       $num = 0;
       $num1 = 0;
       $count = array();
       foreach($users as $user){
        $jobs = Job::select('name')->where('assigned_to', '=', $user->name.' ' .','.' '.$user->admin_phone)->count();
        $jobs1 = Job::select('lead_status')->where('assigned_to', '=', $user->name.' ' .','.' '.$user->admin_phone)->where('lead_status' , '!=' , 'No Status')->count();
        $count[] = $jobs;
        $name[] = $user;
        $stat[] =$jobs1;
        

       }

        return view('sales',compact('count','name','num','stat','num1'))->with('i');
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
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
