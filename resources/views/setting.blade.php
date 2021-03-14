@extends('layouts.app_admin')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
@section('form')
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body">
            <form action="{{ route('setting.store') }}" method="POST" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Vehicle Type</label>
                  <input type="text" class="form-control" name="vehicle_type" id="exampleInputEmail1" placeholder="Enter Vehicle Type">

                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
       
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body">
            <form action="{{ route('setting.store') }}" method="POST" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Lead Source</label>
                  <input type="text" class="form-control" name="lead_source" id="exampleInputEmail1" placeholder="Enter Vehicle Type">

                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
       
      </div>
    </div>
  </div>

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Vehicle Type <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Vehicle Type </button>
                </div>
        
                <ul class="list-group list-group-flush">
                    @foreach ($setting as $type)
                  <li class="list-group-item">{{$type->vehicle_type}}</li>
                  @endforeach
                </ul>
              </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                  Lead Source <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter1">Lead Source </button>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($setting as $lead)
                    <li class="list-group-item">{{$type->lead_source}}</li>
                    @endforeach
                </ul>
              </div>
        </div>
      {{--   <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                  Featured
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
              </div>
        </div> --}}
    </div>
</div>

@endsection