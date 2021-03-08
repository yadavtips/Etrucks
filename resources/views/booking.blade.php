 
@extends('layouts.app_admin')

@section('form')


<head>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "5b619c71-feb1-4bb0-a5a3-f813c1dc7599",
      notifyButton: {
        enable: true,
      },
      subdomainName: "etruckload",

    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  
  
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>

  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
</head>
@section('form')

<div class="content">
	<div class="page-inner">
	
		
		<div class="row">
			<div class="col-md-12 xs-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Bookings
							<a href="/home"  style="color:red;"class="collapsed" aria-expanded="false">
							
								Post New Lead
								
							</a>	
						</h4> 
							
						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="basic-datatables" class="display table table-striped table-hover table-sm">
								<thead class="thead-dark">
									
									<tr>
									
<td>BOOKING ID</td> 
<td>ATTACH BY</td> 
<td>LOAD DATE</td> 
<td>LOAD POINT</td> 
<td>UNLOAD POINT</td> 
<td>TRUCK NO.</td> 
<td>TRUCK TYPE</td> 
<td>DRIVER NO.</td> 
<td>Owner Name</td> 
<td>Owner No</td> 
<td>TPT NAME</td> 
<td>TPT MOBILE</td> 
<td>MOBILE 2</td> 
<td>TPT ACC. NAME</td> 
<td>TPT ACC NO.</td> 
<td>IFSC CODE</td> 
<td>GAADI RATE</td> 
<td>ADV.2 TPT DETAILS</td> 
<td>ADVANCE TOTAL TPT.</td> 
<td>NEFT/IMPS TXN ID</td> 
<td>PRIZE MONEY TPT</td> 
<td>DRIVER ADV.</td> 
<td>BAL.TPT & PAID ON BAL.</td> 
<td>POD DOC RECV.</td> 
<td>PARTY NAME</td> 
<td>PARTY NUMBER</td> 
<td>RATE</td> 
<td>ADVANCE BY PARTY</td> 
<td>ADVANCE TOTAL PARTY</td> 
<td>NEFT/IMPS TXN DETAILS</td> 
<td>PRIZE MONEY PARTY</td> 
<td>BAL.ON PARTY & RECD.</td> 
<td>PROFIT</td> 
<td>POD SENT</td> 
<td>GST BILL NO.</td> 
<td>Verify Docs-Email/WhatsBAG/Copy</td> 
<td>STATUS 1</td> 
<td>STATUS 2</td> 
<td>STATUS 3</td> 
<td>CALL</td>


									</tr>
								</thead>

								<tbody>
									
                                        @foreach ($booking as $book)
                                        <tr>
                                        <td>{{$book->booking}}</td>
                                        <td>{{$book->attach}}</td>
                                        <td>{{$book->load_date}}</td>
                                        <td>{{$book->load_point}}</td>
                                        <td>{{$book->upload_point}}</td>
                                        <td>{{$book->truck_num}}</td>
                                        <td>{{$book->truck_type}}</td>
                                        <td>{{$book->driver_num}}</td>
                                        <td>{{$book->owner_name}}</td>
                                        <td>{{$book->owner_num}}</td>
                                        <td>{{$book->tpt_name}}</td>
                                        <td>{{$book->tpt_mob}}</td>
                                        <td>{{$book->mobile2}}</td>
                                        <td>{{$book->tpt_account_name}}</td>
                                        <td>{{$book->tpt_account_num}}</td>
                                        <td>{{$book->tpt_ifsc_code}}</td>
                                        <td>{{$book->gaadi_rate}}</td>
                                        <td>{{$book->advance_2_tpt_details}}</td>
                                        <td>{{$book->advance_total_tpt}}</td>
                                        <td>{{$book->neft_txn_id}}</td>
                                        <td>{{$book->prize_money_tpt}}</td>
                                        <td>{{$book->driver_adv}}</td>
                                        <td>{{$book->bal_tpt_paid}}</td>
                                        <td>{{$book->pod_doc_rec}}</td>
                                        <td>{{$book->party_name2}}</td>
                                        <td>{{$book->party_num}}</td>
                                        <td>{{$book->party_rate}}</td>
                                        <td>{{$book->adv_by_party}}</td>
                                        <td>{{$book->adv_total_party}}</td>
                                        <td>{{$book->imps_txn_details}}</td>
                                        <td>{{$book->prize_money_party}}</td>
                                        <td>{{$book->bal_on_party}}</td>
                                        <td>{{$book->profit}}</td>
                                        <td>{{$book->pod_sent}}</td>
                                        <td>{{$book->gst_bill_num}}</td>
                                        <td>{{$book->verify_docs}}</td>
                                        <td>{{$book->status1}}</td>
                                        <td>{{$book->status2}}</td>
                                        <td>{{$book->status3}}</td>
                                        <td>{{$book->call_status}}</td>
                                    </tr>
                                        @endforeach
                                   
                                  
								</tbody>
							
                            </table>
                            {{ $booking->links() }}
						</div>
					</div>
				</div>
			</div>
			
		</div>
	<script>
		$('#basic-datatables').DataTable({
			"order": [[ 1, "desc" ]],
  dom: 'Bfrtip',
  buttons: [
    'pageLength', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
  ]
} );
		</script>

{{-- 
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
</div> --}}

@endsection