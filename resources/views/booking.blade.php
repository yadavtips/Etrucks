 
@extends('layouts.app_admin')

@section('form')

<div class="container">
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Booking ID</label>
            <input type="text" class="form-control" name="booking" id="inputEmail4" placeholder="Booking ID">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Attach By</label>
            <input type="text" class="form-control" id="inputPassword4" name="attach" placeholder="Attach By">
          </div>
        </div>
   
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">Load Date</label>
            <input type="text" name="load_date" placeholder="Load Date" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Load Point</label>
            <input type="text"  name="load_point"  placeholder="Load Point" class="form-control" id="inputCity">
        
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Unload Point</label>
            <input type="text" class="form-control" name="upload_point" placeholder="Unload Point" id="inputZip">
          </div>
        </div>
   
        <br>
        <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputCity">Truck No.</label>
              <input type="text" class="form-control" name="truck_num" placeholder="Truck Number" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCity">Truck Type</label>
              <input type="text" class="form-control" name="truck_type" placeholder="Truck Type" id="inputCity">
          
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">Driver No</label>
              <input type="text" class="form-control" name="driver_num" placeholder="Driver Number"  id="inputZip">
            </div>
          </div>
     
          <br>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Owner Name</label>
                <input type="text" class="form-control" name="owner_name" placeholder="owner_name" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Owner Number</label>
                <input type="text" class="form-control" name="owner_num" placeholder="Owner Number" id="inputCity">
            
              </div>
             
            </div>
     
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">TPT Name</label>
                  <input type="text" class="form-control"  name="tpt_name" placeholder="TPT Name" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">TPT Mobile</label>
                  <input type="text" class="form-control" name="tpt_mob" placeholder="TPT Mobile" id="inputCity">
              
                </div>
              
              </div>
     
              <br>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">TPT Account Name</label>
                    <input type="text" class="form-control" name="tpt_account_name" placeholder="TPT Account Name" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">TPT Account Number</label>
                    <input type="text" class="form-control" name="tpt_account_num" placeholder="TPT Account Number" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputZip">TPT IFSC Code</label>
                    <input type="text" class="form-control" name="tpt_ifsc_code" placeholder="TPT IFSC Code" id="inputZip">
                  </div>
                </div>


              <br>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">Gaadi Rate</label>
                    <input type="text" class="form-control" name="gaadi_rate" placeholder="Gaadi Rate" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">Advance 2 TPT Details</label>
                    <input type="text" class="form-control" name="advance_2_tpt_details" placeholder="Advance 2 TPT Details" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputZip">Advance Total TPT</label>
                    <input type="text" class="form-control" name="advance_total_tpt" placeholder="Advance Total TPT" id="inputZip">
                  </div>
                </div>
           


              <br>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">NEFT/IMPS Txn ID</label>
                    <input type="text" name="neft_txn_id" placeholder="NEFT/IMPS Txn ID" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">Prize Money TPT</label>
                    <input type="text" n class="form-control" name="prize_money_tpt" placeholder="Prize Money TPT" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputZip">Driver ADV</label>
                    <input type="text" class="form-control" name="driver_adv" placeholder="Driver Advance" id="inputZip">
                  </div>
                </div>
           
                <br>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">BAL.TPT & PAID ON BAL.</label>
                      <input type="text" class="form-control" name="bal_tpt_paid" placeholder="TPT & Paid on Bal" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity">POD DOC RECV.</label>
                      <input type="text" class="form-control" name="pod_doc_rec" placeholder="POD Doc Rec" id="inputCity">
                  
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputZip">PARTY NAME</label>
                      <input type="text" class="form-control" name="party_name2" placeholder="Party Name" id="inputZip">
                    </div>
                  </div>
           
                  
                  <br>
                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">PARTY NUMBER</label>
                        <input type="text" class="form-control"  name="party_num" placeholder="Party Number" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputCity">PARTY RATE</label>
                        <input type="text" class="form-control"  name="party_rate" placeholder="Party Rate" id="inputCity">
                    
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">ADVANCE BY PARTY</label>
                        <input type="text" class="form-control" name="adv_by_party" placeholder="Advance By Party" id="inputZip">
                      </div>
                    </div>
           
                    
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputCity">ADVANCE TOTAL PARTY</label>
                          <input type="text" class="form-control" name="adv_total_party" placeholder="Advance Total Party" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputCity">NEFT/IMPS TXN DETAILS</label>
                          <input type="text" class="form-control" name="imps_txn_details" placeholder="NEFT/IMPS TXN DETAILS" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputZip">PRIZE MONEY PARTY</label>
                          <input type="text" class="form-control" name="prize_money_party" placeholder="Prize Money Party" id="inputZip">
                        </div>
                      </div>
                 
                      <br>
                      <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputCity">BAL.ON PARTY & RECD.</label>
                            <input type="text" class="form-control" name="bal_on_party" id="inputCity">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputCity">PROFIT</label>
                            <input type="text" class="form-control" name="profit" placeholder="Profit" id="inputCity">
                        
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputZip">POD SENT</label>
                            <input type="text" class="form-control" name="pod_sent" placeholder="POD Sent" id="inputZip">
                          </div>
                        </div>
                   

             <br>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputCity">GST BILL NO.</label>
                          <input type="text" class="form-control" name="gst_bill_num" placeholder="GST Bill Number" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputCity">Verify Docs-Email/WhatsBAG/Copy</label>
                          <input type="text" class="form-control" name="verify_docs" placeholder="Verify Docs" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputZip">STATUS 1</label>
                          <input type="text" class="form-control" name="status" id="inputZip">
                        </div>
                      </div>
                 
           
                      <br>
                    
             
           <br>

          <br>
           
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection