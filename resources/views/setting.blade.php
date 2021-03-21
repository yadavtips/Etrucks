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
                  <input type="text" class="form-control" name="lead_source" id="exampleInputEmail1" placeholder="Lead Source">

                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
       
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body">
            <form action="{{ route('setting.store') }}" method="POST" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Payment Terms</label>
                  <input type="text" class="form-control" name="extra1" id="exampleInputEmail1" placeholder="Payment Terms">

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
                    @if( count($type->vehicle_type) )
                    <li class="list-group-item">{{$type->vehicle_type}}</li>
                @endif
             
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
                    @foreach ($settings->slice(9,20) as $setting)
                    <li class="list-group-item">{{$setting->lead_source}}</li>
                    @endforeach
                </ul>
              </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Payment Terms <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter2"> Payment Terms </button>
              </div>
              <ul class="list-group list-group-flush">
                  @foreach ($settings as $setting)
                  <li class="list-group-item">{{$setting->extra1}}</li>
                  @endforeach
              </ul>
            </div>
        </div> 
    </div>
</div>

@endsection
