<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use\Auth;

class JobController extends Controller
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
    {   $user = User::all();
        ;
       /*  $user = $job->user;  */
        $jobs = Job::latest()->paginate(10);
        return view('admin',compact( 'jobs','user'))
           ->with('i', (request()->input('page', 1) - 1) * 10);
           
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
        $request->validate([
          $phone='phone' => 'required',
           $type= 'vehicle_type' => 'required',
            $load= 'load_from' => 'required',
             $dispatch='dispatch_to' => 'required',
            'remarks' => '',
            'name'=>'',
            'lead_from'=>'required',
            'load_type' => 'required',
        ]);

     

        
        Job::create($request->all());
        return redirect()->route('home')
        ->with('success','Job' . ' ' . $request['load_from'] .' ' . 'to'. ' ' . $request['dispatch_to'] . ' ' . 'Created Successfully' );
     
   
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
          
              'assigned_to'=>'required',
              'id'=>'',
          ]);

        $job->update($request->all());
          return redirect()->route('job')
          ->with('success','Job ID' . ' ' . $request['id'] .' ' . 'Assigned'. ' ' . 'To'. ' ' . $request['assigned_to'] . '  ' . 'Successfully' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
