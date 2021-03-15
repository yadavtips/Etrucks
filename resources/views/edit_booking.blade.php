@extends('layouts.app_admin')

@section('form')
<div class="container">
    <form action="{{ route('booking.update',$booking->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Booking ID</label>
            <input type="text" class="form-control" value="{{$booking->booking}}" name="booking" id="inputEmail4" placeholder="Booking ID">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Attach By</label>
            <input type="text" class="form-control" id="inputPassword4" value="{{$booking->attach}}" name="attach" placeholder="Attach By">
          </div>
        </div>
   
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">Load Date</label>
            <input type="text" value="{{$booking->load_date}}" name="load_date" placeholder="Load Date" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Load Point</label>
            <input type="text"  value="{{$booking->load_point}}" name="load_point"  placeholder="Load Point" class="form-control" id="inputCity">
        
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Unload Point</label>
            <input type="text" class="form-control" value="{{$booking->upload_point}}" name="upload_point" placeholder="Unload Point" id="inputZip">
          </div>
        </div>
   
        <br>
        <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputCity">Truck No.</label>
              <input type="text" class="form-control" value="{{$booking->truck_num}}" name="truck_num" placeholder="Truck Number" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCity">Truck Type</label>
              <input type="text" class="form-control" value="{{$booking->truck_type}}" name="truck_type" placeholder="Truck Type" id="inputCity">
          
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">Driver No</label>
              <input type="text" class="form-control" value="{{$booking->driver_num}}" name="driver_num" placeholder="Driver Number"  id="inputZip">
            </div>
          </div>
     
          <br>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Owner Name</label>
                <input type="text" class="form-control" value="{{$booking->owner_name}}" name="owner_name" placeholder="owner_name" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Owner Number</label>
                <input type="text" class="form-control" value="{{$booking->owner_num}}" name="owner_num" placeholder="Owner Number" id="inputCity">
            
              </div>
             
            </div>
     
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">TPT Name</label>
                  <input type="text" class="form-control"  value="{{$booking->tpt_name}}" name="tpt_name" placeholder="TPT Name" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">TPT Mobile</label>
                  <input type="text" class="form-control" value="{{$booking->tpt_mob}}" name="tpt_mob" placeholder="TPT Mobile" id="inputCity">
              
                </div>
              
              </div>
     
              <br>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">TPT Account Name</label>
                    <input type="text" class="form-control" value="{{$booking->tpt_account_name}}" name="tpt_account_name" placeholder="TPT Account Name" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">TPT Account Number</label>
                    <input type="text" class="form-control" value="{{$booking->tpt_account_num}}" name="tpt_account_num" placeholder="TPT Account Number" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputZip">TPT IFSC Code</label>
                    <input type="text" class="form-control" value="{{$booking->tpt_ifsc_code}}" name="tpt_ifsc_code" placeholder="TPT IFSC Code" id="inputZip">
                  </div>
                </div>
  
  
              <br>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">Gaadi Rate</label>
                    <input type="text" class="form-control" value="{{$booking->gaadi_rate}}" name="gaadi_rate" placeholder="Gaadi Rate" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">Advance 2 TPT Details</label>
                    <input type="text" class="form-control" value="{{$booking->advance_2_tpt_details}}" name="advance_2_tpt_details" placeholder="Advance 2 TPT Details" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputZip">Advance Total TPT</label>
                    <input type="text" class="form-control" value="{{$booking->advance_total_tpt}}" name="advance_total_tpt" placeholder="Advance Total TPT" id="inputZip">
                  </div>
                </div>
           
  
  
              <br>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">NEFT/IMPS Txn ID</label>
                    <input type="text" value="{{$booking->neft_txn_id}}" name="neft_txn_id" placeholder="NEFT/IMPS Txn ID" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">Prize Money TPT</label>
                    <input type="text" n class="form-control" value="{{$booking->prize_money_tpt}}" name="prize_money_tpt" placeholder="Prize Money TPT" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputZip">Driver ADV</label>
                    <input type="text" class="form-control" value="{{$booking->driver_adv}}" name="driver_adv" placeholder="Driver Advance" id="inputZip">
                  </div>
                </div>
           
                <br>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">BAL.TPT & PAID ON BAL.</label>
                      <input type="text" class="form-control" value="{{$booking->bal_tpt_paid}}" name="bal_tpt_paid" placeholder="TPT & Paid on Bal" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity">POD DOC RECV.</label>
                      <input type="text" class="form-control" value="{{$booking->pod_doc_rec}}" name="pod_doc_rec" placeholder="POD Doc Rec" id="inputCity">
                  
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputZip">PARTY NAME</label>
                      <input type="text" class="form-control" value="{{$booking->party_name2}}" name="party_name2" placeholder="Party Name" id="inputZip">
                    </div>
                  </div>
           
                  
                  <br>
                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">PARTY NUMBER</label>
                        <input type="text" class="form-control"  value="{{$booking->party_num}}" name="party_num" placeholder="Party Number" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputCity">PARTY RATE</label>
                        <input type="text" class="form-control"  value="{{$booking->party_rate}}" name="party_rate" placeholder="Party Rate" id="inputCity">
                    
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">ADVANCE BY PARTY</label>
                        <input type="text" class="form-control" value="{{$booking->adv_by_party}}" name="adv_by_party" placeholder="Advance By Party" id="inputZip">
                      </div>
                    </div>
           
                    
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputCity">ADVANCE TOTAL PARTY</label>
                          <input type="text" class="form-control" value="{{$booking->adv_total_party}}" name="adv_total_party" placeholder="Advance Total Party" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputCity">NEFT/IMPS TXN DETAILS</label>
                          <input type="text" class="form-control" value="{{$booking->imps_txn_details}}" name="imps_txn_details" placeholder="NEFT/IMPS TXN DETAILS" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputZip">PRIZE MONEY PARTY</label>
                          <input type="text" class="form-control" value="{{$booking->prize_money_party}}" name="prize_money_party" placeholder="Prize Money Party" id="inputZip">
                        </div>
                      </div>
                 
                      <br>
                      <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputCity">BAL.ON PARTY & RECD.</label>
                            <input type="text" class="form-control" value="{{$booking->bal_on_party}}" name="bal_on_party" id="inputCity">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputCity">PROFIT</label>
                            <input type="text" class="form-control" value="{{$booking->profit}}" name="profit" placeholder="Profit" id="inputCity">
                        
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputZip">POD SENT</label>
                            <input type="text" class="form-control" value="{{$booking->pod_sent}}" name="pod_sent" placeholder="POD Sent" id="inputZip">
                          </div>
                        </div>
                   
  
             <br>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputCity">GST BILL NO.</label>
                          <input type="text" class="form-control" value="{{$booking->gst_bill_num}}" name="gst_bill_num" placeholder="GST Bill Number" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputCity">Verify Docs-Email/WhatsBAG/Copy</label>
                          <input type="text" class="form-control" value="{{$booking->verify_docs}}" name="verify_docs" placeholder="Verify Docs" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputZip">STATUS 1</label>
                          <input type="text" class="form-control" value="{{$booking->status}}" name="status" id="inputZip">
                        </div>
                      </div>
                 
           
                      <br>
                    
             
           <br>
  
          <br>
           
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
      </div>
    </div>
  </div>
  @endsection