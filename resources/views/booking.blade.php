 
@extends('layouts.app_admin')

@section('form')
@section('title', 'Bookings')

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

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
@section('form')

<style>
.modal-inner{
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
}



.sorting{
  padding: 0px 3px !important;
  height: 4px !important;
  width: 0px !important;

}


.table td, .table th {
    font-family: 'Poppins', sans-serif !important;
    font-size: 10px !important;
    border-top-width: 0;
    border-bottom: 1px solid;
    border-color: #ebedf2!important;
    padding: 0 10px!important;
    height: 37px !important;
    vertical-align: middle!important;
    max-width: 150px !important;
}

.btn-sm {
    font-size: 10px !important;
    padding: 5px 7px !important;
}

.card .card-header, .card-light .card-header {
    padding: 0rem 1.25rem !important;
    background-color: rgb(255, 232, 232) !important;
    border-bottom: 1px solid #ff0000!important;
}

.card .card-body, .card-light .card-body {
    padding: 0px !important;
}

.card-title{
  margin: 4px !important;
}

@media (min-width: 992px){
.page-inner
 {
    padding-right: 0rem;
    padding-left: 0rem;
}
}

.page-inner {
    padding: 0 0 !important;
}

button.dt-button, div.dt-button, a.dt-button, input.dt-button {
    position: relative;
    display: inline-block;
    box-sizing: border-box;
   margin: 5px;
   padding: 1px 7px;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid rgb(238, 195, 247);
    border-radius: 3px;
    padding: 0px;
    margin: 6px;
    background-color: transparent;
    margin-left: 3px;
}
</style>



<!-- Large modal -->


<div class="content">
	<div class="page-inner">
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
		
		<div class="row">
			<div class="col-md-12 xs-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title text-center">Bookings
					
								&nbsp &nbsp <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Add New Booking</button>						
						</h4>
							

						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="basic-datatables" class="display table table-striped table-sm full-table">
								<thead class="table-dark table-head">
									
									<tr class="text-white">

<td>ID</td> 		
<td>View</td>
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
<td>TDS YADAV BRO</td> 
<td>TPT HALTING</td> 
<td>TPT OVERLOAD</td> 
<td>TDS VERIFY DOC</td> 
<td>BAL.TPT & PAID ON BAL.</td> 
<td>POD DOC RECV.</td> 
<td>PARTY NAME</td> 
<td>PARTY NUMBER</td>
<td>PARTY NUMBER 2</td>
<td>PARTY RATE</td> 
<td>ADVANCE BY PARTY</td> 
<td>ADVANCE TOTAL PARTY</td> 
<td>NEFT/IMPS TXN DETAILS</td> 
<td>PRIZE MONEY PARTY</td> 
<td>BAL.ON PARTY & RECD.</td> 
<td>PROFIT</td> 
<td>POD SENT</td> 
<td>GST BILL NO.</td> 
<td>TDS BY PARTY</td>
<td>PARTY ADV DATE</td>
<td>BILTI NO.</td>
<td>PARTY BILL AMOUNT</td>
<td>PARTY BILL DATE</td>
<td>PARTY NEFT/IMPS TXN DETAILS</td>
<td>TPT HALTING PARTY</td>
<td>TPT OVERLOAD PARTY</td>
<td>LOADING PERSON</td>
<td>Verify Docs-Email/WhatsApp/Copy</td> 
<td>STATUS 1</td> 
<td>STATUS 2</td> 
<td>STATUS 3</td>
<td>STATUS 4</td>
<td>STATUS 5</td>
<td>STATUS 6</td>
<td>STATUS 7</td>
<td>STATUS 8</td>
<td>STATUS 9</td>
<td>STATUS 10</td>


									</tr>
								</thead>

								<tbody>
									
                                        @foreach ($booking as $book)
                                        <tr class="table-row">
                                          <td class="table-body">{{$book->id}}</td>

                                          <td style="font-size: 12px;"><!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#{{ $book->id }}">
                                              View
                                              </button>
                                              
                                              <!-- Modal -->
                                              <div class="modal fade" id="{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content modal-inner">
                                                <div class="modal-header bg-danger-gradient">
                                                  <h5 class="modal-title text-white" id="{{ $book->id }}Title">View Booking</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-info-gradient text-white font-weight-bolder">
                                                  Booking ID: &nbsp;&nbsp; {{ $book->booking }} <br>
                                                  Attach By: &nbsp;&nbsp; {{ $book->attach }}<br>
                                                  Load Date: &nbsp;&nbsp; {{ $book->load_date }}<br>
                                                  Load Point: &nbsp;&nbsp; {{$book->load_point}}<br>
                                                  Unload Point: &nbsp;&nbsp; {{$book->upload_point}}<br>
                                                  Truck No.: &nbsp;&nbsp; {{$book->truck_num}}<br>
                                                  Truck Type:&nbsp;&nbsp;{{$book->truck_type}}<br>
                                                  Driver No.:&nbsp;&nbsp;{{$book->driver_num}}<br>
                                                  Owner Name:&nbsp;&nbsp;{{$book->owner_name}}<br>
                                                  Owner No.:&nbsp;&nbsp;{{$book->owner_num}}<br>
                                                  TPT Name:&nbsp;&nbsp;{{$book->tpt_name}}<br>
                                                  TPT Mobile:&nbsp;&nbsp;{{$book->tpt_mob}}<br>
                                                  Mobile 2:&nbsp;&nbsp;{{$book->mobile2}}<br>
                                                  TPT Acc Name:&nbsp;&nbsp;{{$book->tpt_account_name}}<br>
                                                  TPT Acc No.:&nbsp;&nbsp;{{$book->tpt_account_num}}<br>
                                                  IFSC Code:&nbsp;&nbsp;{{$book->tpt_ifsc_code}}<br>
                                                  Gaadi Rate:&nbsp;&nbsp;{{$book->gaadi_rate}}<br>
                                                  ADV. 2 TPT Details:&nbsp;&nbsp;{{$book->advance_2_tpt_details}}<br>
                                                  ADV. Total TPT:&nbsp;&nbsp;{{$book->advance_total_tpt}}<br>
                                                  NEFT/IMPS/TXN ID:&nbsp;&nbsp;{{$book->neft_txn_id}}<br>
                                                  Prize Money TPT:&nbsp;&nbsp;{{$book->prize_money_tpt}}<br>
                                                  Driver ADV:&nbsp;&nbsp;{{$book->driver_adv}}<br>
                                                  TDS Yadav Brothers:&nbsp;&nbsp;{{$book->tds_yadavbrother}}<br>
                                                  TPT Halting:&nbsp;&nbsp;{{$book->tpt_halting}}<br>
                                                  TPT Overload:&nbsp;&nbsp;{{$book->tpt_overload}}<br>
                                                  TDS Verify Doc:&nbsp;&nbsp;{{$book->tpt_verifydoc}}<br>
                                                  Bal. TPT & Paid On Bal.:&nbsp;&nbsp;{{$book->bal_tpt_paid}}<br>
                                                  POD Doc Received:&nbsp;&nbsp;{{$book->pod_doc_rec}}<br>
                                                  Party Name:&nbsp;&nbsp;{{$book->party_name2}}<br>
                                                  Party Number:&nbsp;&nbsp;{{$book->party_num}}<br>
                                                  Party Number 2:&nbsp;&nbsp;{{$book->party_num2}}<br>
                                                  Party Rate:&nbsp;&nbsp;{{$book->party_rate}}<br>
                                                  Adv. By Party:&nbsp;&nbsp;{{$book->adv_by_party}}<br>
                                                  Adv. Total Party:&nbsp;&nbsp;{{$book->adv_total_party}}<br>
                                                  NEFT/IMPS TXT Details:&nbsp;&nbsp;{{$book->imps_txn_details}}<br>
                                                  Prize Money Party:&nbsp;&nbsp;{{$book->prize_money_party}}<br>
                                                  Bal. On Party & Received:&nbsp;&nbsp;{{$book->bal_on_party}}<br>
                                                  Profit:&nbsp;&nbsp;{{$book->profit}}<br>
                                                  POD Sent:&nbsp;&nbsp;{{$book->pod_sent}}<br>
                                                  GST Bill No.:&nbsp;&nbsp;{{$book->gst_bill_num}}<br>
                                                  TDS By Party:&nbsp;&nbsp;{{$book->tds_party}}<br>
                                                  Party Adv Date:&nbsp;&nbsp;{{$book->party_advdate}}<br>
                                                  Bilti No.:&nbsp;&nbsp;{{$book->bilti_num}}<br>
                                                  Party Bill Amount:&nbsp;&nbsp;{{$book->partybill_amt}}<br>
                                                  Party Bill Date:&nbsp;&nbsp;{{$book->partybill_date}}<br>
                                                  Party NEFT/IMPS TXN Details:&nbsp;&nbsp;{{$book->party_nefttxn}}<br>
                                                  TPT Halting Party:&nbsp;&nbsp;{{$book->tpt_haltingparty}}<br>
                                                  TPT Overload Party:&nbsp;&nbsp;{{$book->tpt_overloadparty}}<br>
                                                  Loading Person:&nbsp;&nbsp;{{$book->loading_person}}<br>
                                                  Verify Docs-Email/WhatsApp/Copy:&nbsp;&nbsp;{{$book->verify_docparty}}<br>
                                                  Status 1:&nbsp;&nbsp;{{$book->status1}}<br>
                                                  Status 2:&nbsp;&nbsp;{{$book->status2}}<br>
                                                  Status 3:&nbsp;&nbsp;{{$book->status3}}<br>
                                                  Status 4:&nbsp;&nbsp;{{$book->status4}}<br>
                                                  Status 5:&nbsp;&nbsp;{{$book->status5}}<br>
                                                  Status 6:&nbsp;&nbsp;{{$book->status6}}<br>
                                                  Status 7:&nbsp;&nbsp;{{$book->status7}}<br>
                                                  Status 8:&nbsp;&nbsp;{{$book->status8}}<br>
                                                  Status 9:&nbsp;&nbsp;{{$book->status9}}<br>
                                                  Status 10:&nbsp;&nbsp;{{$book->status10}}<br> 
                                                </div>

                                                <div class="modal-footer">

                                                  <a href="{{ url('booking/'.$book->id)}}" class="btn btn-danger btn-sm">Delete</a>



                                                  <a href="{{ route('booking.edit', $book->id) }}" class="btn btn-info btn-sm">Edit</a>


                                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                 
                                                </div>
                                                </div>
                                              </div>
                                              </div></td>

                                          
                                       
                                        
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
                                        <td>{{$book->tds_yadavbrother}}</td>
                                        <td>{{$book->tpt_halting}}</td>
                                        <td>{{$book->tpt_overload}}</td>
                                        <td>{{$book->tpt_verifydoc}}</td>                                   
                                        <td>{{$book->bal_tpt_paid}}</td>
                                        <td>{{$book->pod_doc_rec}}</td>
                                        <td>{{$book->party_name2}}</td>
                                        <td>{{$book->party_num}}</td>
                                        <td>{{$book->party_num2}}</td>
                                        <td>{{$book->party_rate}}</td>
                                        <td>{{$book->adv_by_party}}</td>
                                        <td>{{$book->adv_total_party}}</td>
                                        <td>{{$book->imps_txn_details}}</td>
                                        <td>{{$book->prize_money_party}}</td>
                                        <td>{{$book->bal_on_party}}</td>
                                        <td>{{$book->profit}}</td>
                                        <td>{{$book->pod_sent}}</td>
                                        <td>{{$book->gst_bill_num}}</td>
                                        <td>{{$book->tds_party}}</td>
                                        <td>{{$book->party_advdate}}</td>
                                        <td>{{$book->bilti_num}}</td>
                                        <td>{{$book->partybill_amt}}</td>
                                        <td>{{$book->partybill_date}}</td>
                                        <td>{{$book->party_nefttxn}}</td>
                                        <td>{{$book->tpt_haltingparty}}</td>
                                        <td>{{$book->tpt_overloadparty}}</td>
                                        <td>{{$book->loading_person}}</td>
                                        <td>{{$book->verify_docparty}}</td>
                                        <td>{{$book->status1}}</td>
                                        <td>{{$book->status2}}</td>
                                        <td>{{$book->status3}}</td>
                                        <td>{{$book->status4}}</td>
                                        <td>{{$book->status5}}</td>
                                        <td>{{$book->status6}}</td>
                                        <td>{{$book->status7}}</td>
                                        <td>{{$book->status8}}</td>
                                        <td>{{$book->status9}}</td>
                                        <td>{{$book->status10}}</td>
                                        
                                    </tr>
                                        @endforeach
                                   
                                  
								</tbody>
							
                            </table>
                            {{-- {{ $booking->links() }} --}}
						</div>
					</div>
				</div>
			</div>
			
		</div>
	<script>
		$('#basic-datatables').DataTable({
			"order": [[ 0, "desc" ]],
  dom: 'Bfrtip',
  buttons: [
    'pageLength', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
  ]
} );
		</script>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     
<div class="container">
  <form action="{{ route('booking.store') }}" method="POST" >
    @csrf
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputEmail4">Booking ID</label>
          <input type="text" class="form-control" name="booking" id="inputEmail4" placeholder="Booking ID">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Attach By</label>
          <input type="text" class="form-control" id="inputPassword4" name="attach" placeholder="Attach By">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">Load Date</label>
          <input type="text" name="load_date" placeholder="Load Date" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">Load Point</label>
          <input type="text"  name="load_point"  placeholder="Load Point" class="form-control" id="inputCity">
        </div>
      </div>

      <div class="form-row">   
        <div class="form-group col-md-3">
          <label for="inputZip">Unload Point</label>
          <input type="text" class="form-control" name="upload_point" placeholder="Unload Point" id="inputZip">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">Truck Number</label>
          <input type="text" name="truck_num" placeholder="Load Date" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">Truck Type</label>
          <input type="text"  name="truck_type"  placeholder="Load Point" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">Driver Number</label>
          <input type="text"  name="driver_num"  placeholder="Load Point" class="form-control" id="inputCity">    
        </div>
      </div>
 
      
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputCity">Owner Name</label>
          <input type="text" class="form-control" name="owner_name" placeholder="owner_name" id="inputCity">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">Owner Number</label>
          <input type="text" class="form-control" name="owner_num" placeholder="Owner Number" id="inputCity">    
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">TPT Name</label>
          <input type="text" class="form-control"  name="tpt_name" placeholder="TPT Name" id="inputCity">
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">TPT Mobile</label>
          <input type="text" class="form-control" name="tpt_mob" placeholder="TPT Mobile" id="inputCity">  
        </div>
   
            <br>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputCity">TPT Mobile 2</label>
                <input type="text" class="form-control" name="mobile2" placeholder="TPT Mobile 2" id="inputCity">  
              </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">TPT Account Name</label>
                  <input type="text" class="form-control" name="tpt_account_name" placeholder="TPT Account Name" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">TPT Account Number</label>
                  <input type="text" class="form-control" name="tpt_account_num" placeholder="TPT Account Number" id="inputCity">
              
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">TPT IFSC Code</label>
                  <input type="text" class="form-control" name="tpt_ifsc_code" placeholder="TPT IFSC Code" id="inputZip">
                </div>
              </div>


           
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputCity">Gaadi Rate</label>
                  <input type="text" class="form-control" name="gaadi_rate" placeholder="Gaadi Rate" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">Advance 2 TPT Details</label>
                  <input type="text" class="form-control" name="advance_2_tpt_details" placeholder="Advance 2 TPT Details" id="inputCity">
              
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">Advance Total TPT</label>
                  <input type="text" class="form-control" name="advance_total_tpt" placeholder="Advance Total TPT" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity">NEFT/IMPS Txn ID</label>
                  <input type="text" name="neft_txn_id" placeholder="NEFT/IMPS Txn ID" class="form-control" id="inputCity">
                </div>
              </div>
         


           
            <div class="form-row">
                
                <div class="form-group col-md-3">
                  <label for="inputCity">Prize Money TPT</label>
                  <input type="text" class="form-control" name="prize_money_tpt" placeholder="Prize Money TPT" id="inputCity">
              
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">Driver ADV</label>
                  <input type="text" class="form-control" name="driver_adv" placeholder="Driver Advance" id="inputZip">
                </div>
              <div class="form-group col-md-3">
                <label for="inputZip">TDS Yadav Bro</label>
                <input type="text" class="form-control" name="tds_yadavbrother" placeholder="TDS Yadav Bro" id="inputZip">
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">TPT Halting</label>
                <input type="text" class="form-control" name="tpt_halting" placeholder="TPT Halting" id="inputZip">
              </div>
      </div>
              <br>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputZip">TPT Overload</label>
                  <input type="text" class="form-control" name="tpt_overload" placeholder="TPT Overload" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">TPT Verify Doc</label>
                  <input type="text" class="form-control" name="tpt_verifydoc" placeholder="TPT Verify Doc" id="inputZip">
                </div>
                  <div class="form-group col-md-3">
                    <label for="inputCity">BAL.TPT & PAID ON BAL.</label>
                    <input type="text" class="form-control" name="bal_tpt_paid" placeholder="TPT & Paid on Bal" id="inputCity">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputCity">POD DOC RECV.</label>
                    <input type="text" class="form-control" name="pod_doc_rec" placeholder="POD Doc Rec" id="inputCity">
                
                  </div>
                  
                </div>
         
                
                <br>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputZip">PARTY NAME</label>
                    <input type="text" class="form-control" name="party_name2" placeholder="Party Name" id="inputZip">
                  </div>
                    <div class="form-group col-md-3">
                      <label for="inputCity">PARTY NUMBER</label>
                      <input type="text" class="form-control"  name="party_num" placeholder="Party Number" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputCity">PARTY NUMBER 2</label>
                      <input type="text" class="form-control"  name="party_num2" placeholder="Party Number 2" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputCity">PARTY RATE</label>
                      <input type="text" class="form-control"  name="party_rate" placeholder="Party Rate" id="inputCity">
                  
                    </div>
                  
                  </div>
         
                  
                  <br>
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="inputZip">ADVANCE BY PARTY</label>
                      <input type="text" class="form-control" name="adv_by_party" placeholder="Advance By Party" id="inputZip">
                    </div>
                      <div class="form-group col-md-3">
                        <label for="inputCity">ADVANCE TOTAL PARTY</label>
                        <input type="text" class="form-control" name="adv_total_party" placeholder="Advance Total Party" id="inputCity">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputCity">NEFT/IMPS TXN DETAILS</label>
                        <input type="text" class="form-control" name="imps_txn_details" placeholder="NEFT/IMPS TXN DETAILS" id="inputCity">
                    
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">PRIZE MONEY PARTY</label>
                        <input type="text" class="form-control" name="prize_money_party" placeholder="Prize Money Party" id="inputZip">
                      </div>
                    </div>
               
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputCity">BAL.ON PARTY & RECD.</label>
                          <input type="text" class="form-control" name="bal_on_party" placeholder="Balance on Party" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">PROFIT</label>
                          <input type="text" class="form-control" name="profit" placeholder="Profit" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputZip">POD SENT</label>
                          <input type="text" class="form-control" name="pod_sent" placeholder="POD Sent" id="inputZip">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputZip">GST Bill Number</label>
                          <input type="text" class="form-control" name="gst_bill_num" placeholder="GST Bill Number" id="inputZip">
                        </div>
                      </div>
                 

           <br>
           
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="inputZip">TDS By Party</label>
                      <input type="text" class="form-control" name="tds_party" placeholder="TDS BY Party" id="inputZip">
                    </div>
                      <div class="form-group col-md-3">
                        <label for="inputCity">Party Adv Date</label>
                        <input type="text" class="form-control" name="party_advdate" placeholder="Party Adv Date" id="inputCity">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputCity">Bilti Number</label>
                        <input type="text" class="form-control" name="bilti_num" placeholder="Bilti Number" id="inputCity">
                    
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Party Bill Amount</label>
                        <input type="text" class="form-control" name="partybill_amt" placeholder="Party Bill Amount" id="inputZip">
                      </div>
                    </div>
               
         
                    <br>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputZip">Party Bill Date</label>
                        <input type="text" class="form-control" name="partybill_date" placeholder="Party Bill Date" id="inputZip">
                      </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">Party NEFT TXN</label>
                          <input type="text" class="form-control" name="party_nefttxn" placeholder="Party NEFT TXN" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputCity">TPT Halting Party</label>
                          <input type="text" class="form-control" name="tpt_haltingparty" placeholder="TPT Halting Party" id="inputCity">
                      
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputZip">TPT Overload Party</label>
                          <input type="text" class="form-control" name="tpt_overloadparty" placeholder="TPT Overload Party" id="inputZip">
                        </div>
                      </div>
                  <br>

                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="inputZip">Loading Person</label>
                      <input type="text" class="form-control" name="loading_person" placeholder="Loading Person" id="inputZip">
                    </div>
                      <div class="form-group col-md-3">
                        <label for="inputCity">Party Verify Doc</label>
                        <input type="text" class="form-control" name="verify_docparty" placeholder="Party Verify Doc" id="inputCity">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputCity">Status 1</label>
                        <input type="text" class="form-control" name="status1" placeholder="Status 1" id="inputCity">
                    
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Status 2</label>
                        <input type="text" class="form-control" name="status2" placeholder="Status 2" id="inputZip">
                      </div>
                    </div>
                <br>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputCity">Status 3</label>
                    <input type="text" class="form-control" name="status3" placeholder="Status 3" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Status 4</label>
                    <input type="text" class="form-control" name="status4" placeholder="Status 4" id="inputZip">
                  </div>
                    <div class="form-group col-md-3">
                      <label for="inputCity">Status 5</label>
                      <input type="text" class="form-control" name="status5" placeholder="Status 5" id="inputCity">
                  
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputZip">Status 6</label>
                      <input type="text" class="form-control" name="status6" placeholder="Status 6" id="inputZip">
                    </div>
                  </div>
              <br>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputCity">Status 7</label>
                  <input type="text" class="form-control" name="status7" placeholder="Status 7" id="inputCity">
              
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">Status 8</label>
                  <input type="text" class="form-control" name="status8" placeholder="Status 8" id="inputZip">
                </div>
              
                  <div class="form-group col-md-3">
                    <label for="inputCity">Status 9</label>
                    <input type="text" class="form-control" name="status9" placeholder="Status 9" id="inputCity">
                
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Status 10</label>
                    <input type="text" class="form-control" name="status10" placeholder="Status 10" id="inputZip">
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