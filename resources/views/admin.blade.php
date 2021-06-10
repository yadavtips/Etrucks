 
@extends('layouts.app_admin')
@section('title', 'Leads')
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  
  
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>

  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedheader/3.1.9/js/dataTables.fixedHeader.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
@section('form')


<style>
	.sorting_asc{
		width: 30px !important;
	}

	.table td, .table th {
    font-family: 'Poppins', sans-serif !important;
    font-size: 12px !important;
    border-top-width: 0;
    border-bottom: 1px solid;
    border-color: #ebedf2!important;
    padding: 0 10px!important;
    height: 45px !important;
    vertical-align: middle!important;
    max-width: 150px !important;
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

.lead-btn{
	
	padding: 2px 10px;
	border-radius: 4px;
	background-color: #fd1e00;
	font-family: 'Poppins', sans-serif !important;
	font-size: 15px;
}

.lead-btn:hover{
	background-color: rgb(0, 0, 0);
	
}
</style>

<div class="content">
	<div class="page-inner">
	
		
		<div class="row">
			<div class="col-md-12 xs-6">
				<div class="card">
					<div class="card-header text-center">
						<h4 class="card-title">Recentely Added Leads &nbsp &nbsp
							<a href="/home" class="collapsed lead-btn text-white" aria-expanded="false">
							
								Post New Lead
								
							</a>	
						</h4> 
							
						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="basic-datatables" class="display table table-striped table-hover table-sm" >
								<thead class="thead-dark">
									
									<tr>
										<th>Load Type</th>
										<th>Load From</th>
										<th>Dispatch To</th>
										<th>Party Number</th>
										<th>Vehicle Type</th>
                                        <th>Created At</th>
										<th>Assigned To</th>
										<th>Remarks</th>
										<th>Status</th>
										<th>Send WhatsApp</th>
										<th>Lead Status</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($jobs as $c)
									
									<tr>
										<td style="font-size: 10px;">{{ $c->load_type }} {{ $c->id }}</td>
										
										
										<td style="font-size: 10px;">{{ $c->load_from }}</td>

                                        <td style="font-size: 10px;">{{ $c->dispatch_to }}</td>
										<td style="font-size: 10px;">{{ $c->phone }} </td>
										<td style="font-size: 12px;">{{$c->vehicle_type}}</td>
										<td style="font-size: 10px;">
											{{ $c->created_at }}
										</td >
										
									
										<td style="font-size: 12px;">	@if($c->assigned_to =='')         
											<a><IMG SRC="http://www.gifandgif.eu/animated_gif/New/Animated%20Gif%20New%20(33).gif"></a>
																							@else
																							<p style="font-size: 10px;">{{$c->assigned_to}} <br>{{--  --}}
																					{{$c->updated_at->diffForHumans()}} <br>
																					{{$c->updated_at}}</p> 

																							@endif</td>
                                        <td style="font-size: 12px;">{{$c->remarks}}</td>


                                        <td style="font-size: 12px;"><!-- Button trigger modal -->
											<button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#{{ $c->created_at }}">
												View
											  </button>
											  
											  <!-- Modal -->
											  <div class="modal fade" id="{{ $c->created_at }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
												  <div class="modal-content">
													<div class="modal-header">
													  <h5 class="modal-title" id="{{ $c->created_at }}Title">View Lead</h5>
													  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													  </button>
													</div>
													<div class="modal-body">
														Phone: &nbsp;&nbsp; {{ $c->phone }} <br>
														Load From: &nbsp;&nbsp; {{ $c->load_from }}<br>
														Dispatch To: &nbsp;&nbsp; {{ $c->dispatch_to }}<br>
														Vehicle Type: &nbsp;&nbsp; {{$c->vehicle_type}}<br>
														Lead By: &nbsp;&nbsp; {{$c->name}}<br>
														Source of Lead:&nbsp;&nbsp;{{$c->lead_from}}<br>
														Assigned To:&nbsp;&nbsp;{{$c->assigned_to}}<br>
													

														@if($c->assigned_to =='')         
														<br/>
														<br/>
														<form action="{{ route('job.update',$c->id) }}" method="POST" >
															@csrf
															@method('PUT')
															
															
															<input type="hidden" id="custId" name="id" value="{{ $c->id}}">
															<input type="hidden" id="custId" name="name" value="{{ $c->name}}">
															<input type="hidden" id="custId" name="phone" value="{{ $c->phone}}">
															
														
															
															
																<div class="col">
																	<label for="sel1">Assign This Job To:</label>
												                    <select class="form-control" id="sel1" name="assigned_to">
																		@foreach ($user as $u)
																	<option>{{$u->name}} , {{$u->admin_phone}}</option>
																	
											                            @endforeach
																	
																	  </select>
																</div>
															
															 <br/>
															<div class="text-center">
																<button type="submit" class="btn btn-outline-primary">Assign</button>
															</div>
															
														</form>
								
																										@else
																										<a></a>   
																										  
																										  <p>
																										  <a data-toggle="collapse" href="#collapse{{$c->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
																											  Change
																											</a>
																                                  		  </p>
																										  <div class="collapse" id="collapse{{$c->id}}">
																											<div class="card card-body">
																													<form action="{{ route('job.update',$c->id) }}" method="POST" >
																													@csrf
																													@method('PUT')
																													
																													
																													<input type="hidden" id="custId" name="id" value="{{ $c->id}}">
																													<input type="hidden" id="custId" name="name" value="{{ $c->name}}">
																													<input type="hidden" id="custId" name="phone" value="{{ $c->phone}}">
																												
																													
																													
																														<div class="col">
																															<label for="sel1">Change Asigned Job To:</label>
																															<select class="form-control" id="sel1" name="assigned_to">
																																@foreach ($user as $u)
																																<option>{{$u->name}} , {{$u->admin_phone}}</option>
																																@endforeach
																															
																															  </select>
																														</div>
																													
																													 <br/>
																													<div class="text-center">
																														<button type="submit" class="btn btn-outline-primary">Change</button>
																													</div>
																													
																												</form>
																						
																											</div>
																										  </div>
																										@endif

													
													</div>
													<div class="modal-footer">
													  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
													 
													</div>
												  </div>
												</div>
											  </div></td>
											  
										<td style="text-align: center;font-size:20px;">@if($c->assigned_to =='')   
											Assign First
												@else

												<i class="fab fa-whatsapp fa-lg "style="color:green;" data-toggle="modal" data-target=".bd-example-modal-sm{{ $c->id}}"></i>
												<div class="modal fade bd-example-modal-sm{{ $c->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-sm">
													  <div class="modal-content" >
														<div class="card">
															<div class="card-body">
																	<a  href="https://api.whatsapp.com/send?phone=91{{$c->phone}}&text=Thank%20you%20for%20getting%20in%20touch%20with%20Etruckload%20!%20Your%20Mobile%20No.%20%3D%20{{$c->phone}}%20Truck%20required%20%3D%20{{$c->vehicle_type}}%20Load%20from%20%3D%20{{ $c->load_from }}%20Dispatch%20to%20%3D%20{{ $c->dispatch_to }}%20Your%20job%20is%20assigned%20to%20{{$c->assigned_to}}.%20He%20will%20call%20you%20soon.%20If%20have%20any%20queries%20please%20call%20us%209717940842%20" target="_blank"><i class="fab fa-whatsapp fa-lg "style="color:green;font-size:20px;"></i>Party </a>
																<br>
																
															</div>
														  </div>
														  <div class="card">
															<div class="card-body">
																@php

																$string = strstr($c->assigned_to, ',');	
																$assignee =  str_replace(","," ",$string)
		
																@endphp
																<a  href="https://api.whatsapp.com/send?phone=91{{$assignee}}&text=For%20assignee%20and%20admin%0A%0ATruck%20required%20Your%20Mobile%20No.%20%3D%20{{$c->phone}}%20Truck%20required%20%3D%20{{$c->vehicle_type}}%20Load%20from%20%3D%20{{ $c->load_from }}%20Dispatch%20to%20%3D%20{{ $c->dispatch_to }}%20Your%20job%20is%20assigned%20to%20{{$c->assigned_to}}.%20He%20will%20call%20you%20soon.%20If%20have%20any%20queries%20please%20call%20us%209717940842%20"  target="_blank"><i class="fab fa-whatsapp fa-lg "style="color:green;font-size:20px;"></i>  Assignee </a>
																<br>
															</div>
														  </div>
														  <div class="card">
															<div class="card-body">
																 <a  href="https://api.whatsapp.com/send?phone=919911695753&text=For%20assignee%20and%20admin%0A%0ATruck%20required%20Your%20Mobile%20No.%20%3D%20{{$c->phone}}%20Truck%20required%20%3D%20{{$c->vehicle_type}}%20Load%20from%20%3D%20{{ $c->load_from }}%20Dispatch%20to%20%3D%20{{ $c->dispatch_to }}%20Your%20job%20is%20assigned%20to%20{{$c->assigned_to}}.%20He%20will%20call%20you%20soon.%20If%20have%20any%20queries%20please%20call%20us%209717940842%20" target="_blank"><i class="fab fa-whatsapp fa-lg "style="color:green;font-size:20px;"></i> Admin </a>

															</div>
														  </div>

														  <div class="card">
															<div class="card-body">
																<a  href="https://api.whatsapp.com/send?phone=919315436648&text=For%20assignee%20and%20admin%0A%0ATruck%20required%20Your%20Mobile%20No.%20%3D%20{{$c->phone}}%20Truck%20required%20%3D%20{{$c->vehicle_type}}%20Load%20from%20%3D%20{{ $c->load_from }}%20Dispatch%20to%20%3D%20{{ $c->dispatch_to }}%20Your%20job%20is%20assigned%20to%20{{$c->assigned_to}}.%20He%20will%20call%20you%20soon.%20If%20have%20any%20queries%20please%20call%20us%209717940842%20" target="_blank"><i class="fab fa-whatsapp fa-lg "style="color:green;font-size:20px;"></i>Sub-Admin 1</a>

															</div>
														  </div>

														  <div class="card">
															<div class="card-body">
															<a  href="https://api.whatsapp.com/send?phone=917011893820&text=For%20assignee%20and%20admin%0A%0ATruck%20required%20Your%20Mobile%20No.%20%3D%20{{$c->phone}}%20Truck%20required%20%3D%20{{$c->vehicle_type}}%20Load%20from%20%3D%20{{ $c->load_from }}%20Dispatch%20to%20%3D%20{{ $c->dispatch_to }}%20Your%20job%20is%20assigned%20to%20{{$c->assigned_to}}.%20He%20will%20call%20you%20soon.%20If%20have%20any%20queries%20please%20call%20us%209717940842%20" target="_blank"><i class="fab fa-whatsapp fa-lg "style="color:green;font-size:20px;"></i>Sub-Admin 2</a>

															</div>
														  </div>
														
													
													  </div>
													</div>
												  </div>
											@endif
										</td>
									<td style="font-size: 13px;">
										@if ($c->lead_status == '')
										<a style="color:red;text-align:center;">No Status</a>
										@elseif($c->lead_status == "Completed")
										
										<a style="color:#00ff44;text-align:center;">Completed</a>

										@else
									<a style="color:orange;text-align:center;">{{$c->lead_status}}</a>
										@endif
										
									</td>
										

                                    </tr>
                                    @endforeach
								</tbody>
							
                            </table>
                           
						</div>
					</div>
				</div>
			</div>
			
		</div>
	<script>
		$('#basic-datatables').DataTable({
			"order": [[ 5, "desc" ]],
             dom: 'Bfrtip',
            buttons: [
             'pageLength', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
  ]
} );

		</script>


@endsection