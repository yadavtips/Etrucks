<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Carbon\Carbon;
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
    {  
        if(Auth::user()->email == "abhikk30@hotmail.com" || Auth::user()->email == "yadavtips@gmail.com" || Auth::user()->email == "yadavtips1@gmail.com" || Auth::user()->email == "etruckload@gmail.com" || Auth::user()->email == "nitinanand58@gmail.com"){
            $user = User::all();
            ;
           /*  $user = $job->user;  */
            $jobs = Job::latest()->paginate(500);
            return view('admin',compact( 'jobs','user'))
               ->with('i', (request()->input('page', 1) - 1) * 500);
        }
        
        else{
            echo "You are not allowed";
        };
       
           
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
          $phone='phone' => ['required','min:10'],
           $type= 'vehicle_type' => 'required',
            $load= 'load_from' => 'required',
             $dispatch='dispatch_to' => 'required',
            'remarks' => '',
            'name'=>'',
            'lead_from'=>'required',
            'load_type' => 'required',
        ]);

     
      /*   Curl::to('https://api.twilio.com/2010-04-01/Accounts/AC4157963e85ead41ef3a0fd1498877e8b/Messages.json')

        ->withData(['To'=>'whatsapp:+918743000998', 'From'=>'whatsapp:+14155238886', 'Body'=>'New lead added by'. ' ' .$request['name'] . ' ' . 'on' .' '. Carbon::now()->format('h:i:s - d M y')])
        ->withHeader("authorization: Basic QUM0MTU3OTYzZTg1ZWFkNDFlZjNhMGZkMTQ5ODg3N2U4YjpmY2Y2YmE2NWI3Y2YwNzYzMjI0NzdkNzViNzhiNjZiZA==")

        ->post();

       Curl::to('https://onesignal.com/api/v1/notifications')

        ->withData(array( 'app_id'=>'5b619c71-feb1-4bb0-a5a3-f813c1dc7599',
            'included_segments'=> ['All'],
            'contents'=> ['en'=> 'New lead added by'. ' ' .$request['name'] . ' ' . 'on' .' '. Carbon::now()->format('h:i:s - d M y')]
       ))
       ->asJson()
        ->withHeader("authorization: Basic Y2IyNzdlNTItMTlkMS00NGNjLWJiNWItMTg3NjkwYTdmNDc1",
        "content-type:application/json",)

        ->post(); */
        
        
        /* Curl::to('http://nimbusit.co.in/api/swsendSingle.asp')
  
        ->withData(['username'=>'t1etruckload', 'password'=>'9818250813', 'sender'=>'ETRUCK','sendto'=>$request['phone'], 'message'=>'Thanks for your interest in Etruckload. We are proccessing you order. We will inform you once your task is assigned to our team. In case of any queries, please reach out us at 91 9717940842 from 11AM to 6 PM'])

        ->post(); 
         */
        
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
        return view('edit_leads',compact('job'));
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
          
              'assigned_to'=>'',
              'id'=>'',
              'lead_status'=>'',
              'phone' => '',
               'vehicle_type' => '',
               'load_from' => '',
                'dispatch_to' => '',
               'remarks' => '',
               'name'=>'',
               'lead_from'=>'',
               'load_type' => '',

          ]);
          
          Curl::to('https://api.twilio.com/2010-04-01/Accounts/AC4157963e85ead41ef3a0fd1498877e8b/Messages.json')

          ->withData(['To'=>'whatsapp:+918743000998', 'From'=>'whatsapp:+14155238886', 'Body'=>'This Lead Assigned to'.' ' .$request['assigned_to'].  ' ' . 'at' .' '. Carbon::now()->format('h:i:s - d M y') .'Check Now!!'])
          ->withHeader("authorization: Basic QUM0MTU3OTYzZTg1ZWFkNDFlZjNhMGZkMTQ5ODg3N2U4YjpmY2Y2YmE2NWI3Y2YwNzYzMjI0NzdkNzViNzhiNjZiZA==")
  
          ->post();
           
           Curl::to('http://nimbusit.co.in/api/swsendSingle.asp')
  
           ->withData(['username'=>'t1etruckload', 'password'=>'9818250813', 'sender'=>'ETRUCK','sendto'=>$request['phone'], 'message'=>'Thanks for your interest in Etruckload. Your task is assigned to our officer'. ' ' .$request['assigned_to'] . ' ' . 'at' .' '. Carbon::now()->format('h:i - d M y').'.'. 'He will call you as soon as possible, In case of any queries,reach out us at 9717940842 from 11AM to 6 PM'])
   
           ->post(); 


       Curl::to('https://onesignal.com/api/v1/notifications')

       ->withData(array( 'app_id'=>'5b619c71-feb1-4bb0-a5a3-f813c1dc7599',
           'included_segments'=> ['All'],
           'contents'=> ['en'=> 'This lead is assigned to'. ' ' .$request['assigned_to'] . ' ' . 'at' .' '. Carbon::now()->format('h:i - d M y')]
      ))
      ->asJson()
       ->withHeader("authorization: Basic Y2IyNzdlNTItMTlkMS00NGNjLWJiNWItMTg3NjkwYTdmNDc1",
       "content-type:application/json")

       ->post();

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
