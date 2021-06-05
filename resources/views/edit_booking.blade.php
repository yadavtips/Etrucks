@extends('layouts.app_admin')

@section('form')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" style="text-align: center;" role="alert">
        {{ session('status') }}
    </div>
@endif
    <form action="{{ route('booking.update',$booking->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputEmail4">Booking ID</label>
            <input type="text" class="form-control" name="booking" value="{{$booking->booking}}" id="inputEmail4" placeholder="Booking ID">
          </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4">Attach By</label>
            <input type="text" class="form-control" id="inputPassword4" value="{{$booking->attach}}" name="attach" placeholder="Attach By">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Load Date</label>
            <input type="text" name="load_date" placeholder="Load Date" value="{{$booking->load_date}}"  class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Load Point</label>
            <input type="text"  name="load_point"  placeholder="Load Point" value="{{$booking->load_point}}" class="form-control" id="inputCity">
          </div>
        </div>
   
        <div class="form-row">   
          <div class="form-group col-md-3">
            <label for="inputZip">Unload Point</label>
            <input type="text" class="form-control" name="upload_point" value="{{$booking->upload_point}}" placeholder="Unload Point" id="inputZip">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Truck Number</label>
            <input type="text" name="truck_num" placeholder="Truck Number" value="{{$booking->truck_num}}" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Truck Type</label>
            <input type="text"  name="truck_type"  placeholder="Truck Type" value="{{$booking->truck_type}}" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Driver Number</label>
            <input type="text"  name="driver_num"  placeholder="Driver Number" value="{{$booking->driver_num}}" class="form-control" id="inputCity">    
          </div>
        </div>
   
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputCity">Owner Name</label>
            <input type="text" class="form-control" name="owner_name" value="{{$booking->owner_name}}" placeholder="owner_name" id="inputCity">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">Owner Number</label>
            <input type="text" class="form-control" name="owner_num" value="{{$booking->owner_num}}" placeholder="Owner Number" id="inputCity">    
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">TPT Name</label>
            <input type="text" class="form-control"  name="tpt_name" value="{{$booking->tpt_name}}" placeholder="TPT Name" id="inputCity">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">TPT Mobile</label>
            <input type="text" class="form-control" name="tpt_mob" value="{{$booking->tpt_mob}}" placeholder="TPT Mobile" id="inputCity">  
          </div>
          </div>
     
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">TPT Mobile 2</label>
              <input type="text" class="form-control" name="mobile2" value="{{$booking->mobile2}}" placeholder="TPT Mobile 2" id="inputCity">  
            </div>
              <div class="form-group col-md-3">
                <label for="inputCity">TPT Account Name</label>
                <input type="text" class="form-control" name="tpt_account_name" value="{{$booking->tpt_account_name}}" placeholder="TPT Account Name" id="inputCity">
              </div>
              <div class="form-group col-md-3">
                <label for="inputCity">TPT Account Number</label>
                <input type="text" class="form-control" name="tpt_account_num" value="{{$booking->tpt_account_num}}" placeholder="TPT Account Number" id="inputCity">
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">TPT IFSC Code</label>
                <input type="text" class="form-control" name="tpt_ifsc_code" value="{{$booking->tpt_ifsc_code}}" placeholder="TPT IFSC Code" id="inputZip">
              </div>
            </div>
     
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputCity">Gaadi Rate</label>
                  <input type="text" class="form-control" name="gaadi_rate" value="{{$booking->gaadi_rate}}" placeholder="Gaadi Rate" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">Advance 2 TPT Details</label>
                  <input type="text" class="form-control" name="advance_2_tpt_details" value="{{$booking->advance_2_tpt_details}}" placeholder="Advance 2 TPT Details" id="inputCity">
              
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">Advance Total TPT</label>
                  <input type="text" class="form-control" name="advance_total_tpt" value="{{$booking->advance_total_tpt}}" placeholder="Advance Total TPT" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">NEFT/IMPS Txn ID</label>
                  <input type="text" name="neft_txn_id" value="{{$booking->neft_txn_id}}" placeholder="NEFT/IMPS Txn ID" class="form-control" id="inputCity">
                </div>
              </div>
     
              
                <div class="form-row">
                
                  <div class="form-group col-md-3">
                    <label for="inputCity">Prize Money TPT</label>
                    <input type="text" class="form-control" name="prize_money_tpt" value="{{$booking->prize_money_tpt}}" placeholder="Prize Money TPT" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Driver ADV</label>
                    <input type="text" class="form-control" name="driver_adv" value="{{$booking->driver_adv}}" placeholder="Driver Advance" id="inputZip">
                  </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">TDS Yadav Bro</label>
                  <input type="text" class="form-control" name="tds_yadavbrother" value="{{$booking->tds_yadavbrother}}" placeholder="TDS Yadav Bro" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">TPT Halting</label>
                  <input type="text" class="form-control" name="tpt_halting" value="{{$booking->tpt_halting}}" placeholder="TPT Halting" id="inputZip">
                </div>
              </div>
  
  
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputZip">TPT Overload</label>
                    <input type="text" class="form-control" name="tpt_overload" value="{{$booking->tpt_overload}}" placeholder="TPT Overload" id="inputZip">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">TPT Verify Doc</label>
                    <input type="text" class="form-control" name="tpt_verifydoc" value="{{$booking->tpt_verifydoc}}" placeholder="TPT Verify Doc" id="inputZip">
                  </div>
                    <div class="form-group col-md-3">
                      <label for="inputCity">BAL.TPT & PAID ON BAL.</label>
                      <input type="text" class="form-control" name="bal_tpt_paid" value="{{$booking->bal_tpt_paid}}" placeholder="TPT & Paid on Bal" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputCity">POD DOC RECV.</label>
                      <input type="text" class="form-control" name="pod_doc_rec"  value="{{$booking->pod_doc_rec}}" placeholder="POD Doc Rec" id="inputCity">
                  
                    </div>
                  </div>
           
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputZip">PARTY NAME</label>
                        <input type="text" class="form-control" name="party_name2" value="{{$booking->party_name2}}" placeholder="Party Name" id="inputZip">
                      </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">PARTY NUMBER</label>
                          <input type="text" class="form-control"  name="party_num" value="{{$booking->party_num}}" placeholder="Party Number" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">PARTY NUMBER 2</label>
                          <input type="text" class="form-control"  name="party_num2" value="{{$booking->party_num2}}" placeholder="Party Number 2" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">PARTY RATE</label>
                          <input type="text" class="form-control"  name="party_rate" value="{{$booking->party_rate}}" placeholder="Party Rate" id="inputCity">
                      
                        </div>
                      </div>
           
              
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="inputZip">ADVANCE BY PARTY</label>
                            <input type="text" class="form-control" name="adv_by_party" value="{{$booking->adv_by_party}}" placeholder="Advance By Party" id="inputZip">
                          </div>
                            <div class="form-group col-md-3">
                              <label for="inputCity">ADVANCE TOTAL PARTY</label>
                              <input type="text" class="form-control" name="adv_total_party" value="{{$booking->adv_total_party}}" placeholder="Advance Total Party" id="inputCity">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputCity">NEFT/IMPS TXN DETAILS</label>
                              <input type="text" class="form-control" name="imps_txn_details" value="{{$booking->imps_txn_details}}" placeholder="NEFT/IMPS TXN DETAILS" id="inputCity">
                          
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputZip">PRIZE MONEY PARTY</label>
                              <input type="text" class="form-control" name="prize_money_party" value="{{$booking->prize_money_party}}" placeholder="Prize Money Party" id="inputZip">
                            </div>
                          </div>
           
                  
                            <div class="form-row">
                              <div class="form-group col-md-3">
                                <label for="inputCity">BAL.ON PARTY & RECD.</label>
                                <input type="text" class="form-control" name="bal_on_party" value="{{$booking->bal_on_party}}" placeholder="Balance on Party" id="inputCity">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputCity">PROFIT</label>
                                <input type="text" class="form-control" name="profit" value="{{$booking->profit}}" placeholder="Profit" id="inputCity">
                            
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputZip">POD SENT</label>
                                <input type="text" class="form-control" name="pod_sent" value="{{$booking->pod_sent}}" placeholder="POD Sent" id="inputZip">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputZip">GST Bill Number</label>
                                <input type="text" class="form-control" name="gst_bill_num" value="{{$booking->gst_bill_num}}" placeholder="GST Bill Number" id="inputZip">
                              </div>
                            </div>
           
                  
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputZip">TDS By Party</label>
                        <input type="text" class="form-control" name="tds_party" value="{{$booking->tds_party}}" placeholder="TDS BY Party" id="inputZip">
                      </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">Party Adv Date</label>
                          <input type="text" class="form-control" name="party_advdate" value="{{$booking->party_advdate}}" placeholder="Party Adv Date" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">Bilti Number</label>
                          <input type="text" class="form-control" name="bilti_num" value="{{$booking->bilti_num}}" placeholder="Bilti Number" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputZip">Party Bill Amount</label>
                          <input type="text" class="form-control" name="partybill_amt" value="{{$booking->partybill_amt}}" placeholder="Party Bill Amount" id="inputZip">
                        </div>
                      </div>
                 
                    
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="inputZip">Party Bill Date</label>
                            <input type="text" class="form-control" name="partybill_date" value="{{$booking->partybill_date}}" placeholder="Party Bill Date" id="inputZip">
                          </div>
                            <div class="form-group col-md-3">
                              <label for="inputCity">Party NEFT TXN</label>
                              <input type="text" class="form-control" name="party_nefttxn" value="{{$booking->party_nefttxn}}" placeholder="Party NEFT TXN" id="inputCity">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputCity">TPT Halting Party</label>
                              <input type="text" class="form-control" name="tpt_haltingparty" value="{{$booking->tpt_haltingparty}}" placeholder="TPT Halting Party" id="inputCity">
                          
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputZip">TPT Overload Party</label>
                              <input type="text" class="form-control" name="tpt_overloadparty" value="{{$booking->tpt_overloadparty}}" placeholder="TPT Overload Party" id="inputZip">
                            </div>
                          </div>
                  
             <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputZip">Loading Person</label>
                <input type="text" class="form-control" name="loading_person" value="{{$booking->loading_person}}" placeholder="Loading Person" id="inputZip">
              </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">Party Verify Doc</label>
                  <input type="text" class="form-control" name="verify_docparty" value="{{$booking->verify_docparty}}" placeholder="Party Verify Doc" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">Status 1</label>
                  <input type="text" class="form-control" name="status1" value="{{$booking->status1}}" placeholder="Status 1" id="inputCity">
              
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">Status 2</label>
                  <input type="text" class="form-control" name="status2" value="{{$booking->status2}}" placeholder="Status 2" id="inputZip">
                </div>
              </div>
               
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputCity">Status 3</label>
                    <input type="text" class="form-control" name="status3" value="{{$booking->status3}}" placeholder="Status 3" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Status 4</label>
                    <input type="text" class="form-control" name="status4" value="{{$booking->status4}}" placeholder="Status 4" id="inputZip">
                  </div>
                    <div class="form-group col-md-3">
                      <label for="inputCity">Status 5</label>
                      <input type="text" class="form-control" name="status5" value="{{$booking->status5}}" placeholder="Status 5" id="inputCity">
                  
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputZip">Status 6</label>
                      <input type="text" class="form-control" name="status6" value="{{$booking->status6}}" placeholder="Status 6" id="inputZip">
                    </div>
                  </div>

                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputCity">Status 7</label>
                        <input type="text" class="form-control" name="status7" value="{{$booking->status7}}" placeholder="Status 7" id="inputCity">
                    
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Status 8</label>
                        <input type="text" class="form-control" name="status8" value="{{$booking->status8}}" placeholder="Status 8" id="inputZip">
                      </div>
                    
                        <div class="form-group col-md-3">
                          <label for="inputCity">Status 9</label>
                          <input type="text" class="form-control" name="status9" value="{{$booking->status9}}" placeholder="Status 9" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputZip">Status 10</label>
                          <input type="text" class="form-control" name="status10" value="{{$booking->status10}}" placeholder="Status 10" id="inputZip">
                        </div>
                        </div>
                 
          
             
        
        <div class="row">
          <div class="col text-center">
            <button type="submit" class="btn btn-primary my-3">Submit</button>
          </div>
        </div>
                     
     

   
</div>
</form>
</div>

@endsection