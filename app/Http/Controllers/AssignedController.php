<?php

namespace App\Http\Controllers;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class AssignedController extends Controller
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
        $user = auth()->user();
        $app = Job::latest()->select()->where('assigned_to', '=', $user->name.' ' .','.' '.$user->admin_phone)->paginate(6);

        
  
        return view('assigned_to_you_leads',compact('app'))
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
    public function store(Request $request, $id)
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
        $request->validate([
            'assigned_to' => 'required',
            'phone' => '',
           ]);
   
           Curl::to('http://nimbusit.co.in/api/swsendSingle.asp')
  
           ->withData(['username'=>'t1etruckload', 'password'=>'9818250813', 'sender'=>'ETRUCK','sendto'=>$request['phone'], 'message'=>'Thanks for your interest in Etruckload. Your task is assigned to our officer'. ' ' .$request['assigned_to'] . ' ' . 'at' .' '. Carbon::now()->format('h:i - d M y').'.'. 'He will call you as soon as possible, In case of any queries,reach out us at 9717940842 from 11AM to 6 PM'])
   
           ->post();


           Curl::to('https://onesignal.com/api/v1/notifications')

           ->withData(array( 'app_id'=>'5b619c71-feb1-4bb0-a5a3-f813c1dc7599',
               'included_segments'=> ['All'],
               'contents'=> ['en'=> 'This lead is assigned to'. ' ' .$request['assigned_to'] . ' ' . 'at' .' '. Carbon::now()->format('h:i:s - d M y')]
          ))
          ->asJson()
           ->withHeader("authorization: Basic Y2IyNzdlNTItMTlkMS00NGNjLWJiNWItMTg3NjkwYTdmNDc1",
           "content-type:application/json",)
    
           ->post();

           Curl::to('https://api.twilio.com/2010-04-01/Accounts/AC4157963e85ead41ef3a0fd1498877e8b/Messages.json')

           ->withData(['To'=>'whatsapp:+918743000998', 'From'=>'whatsapp:+14155238886', 'Body'=>'This Lead Assigned to'.' ' .$request['assigned_to'].  ' ' . 'at' .' '. Carbon::now()->format('h:i:s - d M y') .'Check Now!!'])
           ->withHeader("authorization: Basic QUM0MTU3OTYzZTg1ZWFkNDFlZjNhMGZkMTQ5ODg3N2U4YjpmY2Y2YmE2NWI3Y2YwNzYzMjI0NzdkNzViNzhiNjZiZA==")
   
           ->post();

          Job::update($request->all());
         /*  $job->update($request->all()); */
          return redirect()->route('job')
          ->with('success','Job Assigned Succesfully' );
          
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
