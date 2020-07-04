 
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
										<th>From</th>
										<th>To</th>
                                         <th>Created at</th>
                                        <th>Lead by</th>
                                        <th>Edit Job</th>

									</tr>
								</thead>

								<tbody>
									@foreach ($jobs as $c)
									<tr>
										<td>{{ $c->id }}</td>
										
										<td>{{ $c->load_from }}</td>

                                        <td>{{ $c->dispatch_to }}</td>
                                        <td>{{ $c->created_at }}</td>
                                        <td>{{ $c->name }}</td>
                                        <td><a class="btn btn-outline-primary btn-sm"href="{{ route('job.edit',$c->id) }}">Edit</a></td>
										

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

@endsection