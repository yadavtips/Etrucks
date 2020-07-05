 
@extends('layouts.app1')

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
										<th>Job Id</th>
										<th>Phone Number</th>
										<th>From</th>
										<th>To</th>
                                         <th>Created at</th>
                                        <th>Lead by</th>
                                        <th>Assign Job</th>

									</tr>
								</thead>

								<tbody>
									@foreach ($jobs as $c)
									<tr>
										<td>{{ $c->id }}</td>
										<td>{{ $c->phone }}</td>
										<td>{{ $c->load_from }}</td>

                                        <td>{{ $c->dispatch_to }}</td>
                                        <td>{{ $c->created_at }}</td>
                                        <td>{{ $c->name }}</td>
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
								
													</div>
													<div class="modal-footer">
													  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
													 
													</div>
												  </div>
												</div>
											  </div></td>
										

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