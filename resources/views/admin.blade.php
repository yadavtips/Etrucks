 
@extends('layouts.app_admin')

<head>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	<script>
	  window.OneSignal = window.OneSignal || [];
	  OneSignal.push(function() {
		OneSignal.init({
		  appId: "5f36c6c7-eeaf-4012-9f14-3936507c33d1",
		  notifyButton: {
			enable: true,
		  },
		  subdomainName: "etrucks-heroku",
		});
	  });
	</script>
</head>
@section('form')
	
<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Dashboard</h4>
		
		</div>
		
		<div class="row">
			<div class="col-md-12 xs-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Recentely Added Leads</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="basic-datatables" class="display table table-striped table-hover">
								<thead class="thead-dark">
									
									<tr>
										<th>Id</th>
										<th>From</th>
										<th>To</th>
                                         <th>Created</th>
                                       
										<th>Assigned To</th>
										<th>Status</th>
										<th>Whatsapp</th>
										<th>Lead Status</th>
									
										

									</tr>
								</thead>

								<tbody>
									@foreach ($jobs as $c)
									
									<tr >
										<td>{{ $c->id }}</td>
										
										<td>{{ $c->load_from }}</td>

                                        <td>{{ $c->dispatch_to }}</td>
										<td>{{ $c->created_at->diffForHumans()}}</td>
										
									
										<td>	@if($c->assigned_to =='')         
											<a><IMG SRC="http://www.gifandgif.eu/animated_gif/New/Animated%20Gif%20New%20(33).gif"></a>
																							@else
																							<p>{{$c->assigned_to}} <br>{{--  --}}
																					{{$c->updated_at->diffForHumans()}} </p>    
																							@endif</td>
                                        <td><!-- Button trigger modal -->
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
														
															
															
																<div class="col">
																	<label for="sel1">Assign This Job To:</label>
												                    <select class="form-control" id="sel1" name="assigned_to">
																		@foreach ($user as $u)
																		  <option>{{$u->name}}</option>
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
																												
																													
																													
																														<div class="col">
																															<label for="sel1">Change Asigned Job To:</label>
																															<select class="form-control" id="sel1" name="assigned_to">
																																@foreach ($user as $u)
																																  <option>{{$u->name}}</option>
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
											  
										<td style="text-align: center;">@if($c->assigned_to =='')   
											Assign First
												@else
											<a  href="https://wa.me/91{{$c->phone}}?text=Thank%20you%20for%20getting%20in%20touch%21%0A%0AYour%20Mobile%20No.%20%3D%20%20{{$c->phone}}%0ATruck%20required%20%3D%20{{$c->vehicle_type}}%0ALoad%20from%20%3D%20{{$c->load_from}}%0ADispatch%20to%20%3D%20{{$c->dispatch_to}}%0A%0AYour%20job%20is%20assigned%20to%20{{$c->assigned_to}}%0AMobile%20No%20%3D%209%0A%0A{{$c->assigned_to_number}}%20We%20will%20call%20you%20soon.%0A%0AIf%20have%20any%20queries%20please%20call%20us-9717940842%2011%20am%20to%206%20pm" target="_blank"><i class="fab fa-whatsapp fa-lg "style="color:grey;"></i></a>
											@endif
										</td>
									<td>
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
                             {!! $jobs->links() !!}
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




@endsection