@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Job') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('job.store') }}" method="POST" >
                                @csrf
                                
                                <input type="hidden" id="custId" name="name" value="{{ Auth::user()->name }}">
                                <div class="form-group">
                                    <label class="form-label" for="name">Phone Number</label>
                                    <input type="text" class="form-control" id="name" name="phone" placeholder="Phone Number" tabindex="1" required>
                                </div>                      
                                
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="name">Load From</label>
                                      <input type="text" name="load_from"  class="form-control" placeholder="Load From" required>
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="name">Dispatch To</label>
                                      <input type="text" name="dispatch_to"  class="form-control" placeholder="Dispatch To" required>
                                    </div>
                                 </div>
                                <br/>
                                <div class="row">
                                    <div class="col">
                                        
                                        <label for="sel1">Vehicle Type (select one):</label>
                                        <select class="form-control" id="sel1" name="vehicle_type">
                                          <option>32 Feet , 7 Ton (32 * 8 * 8) </option>
                                          <option>32 Feet , 7 Ton hq (32 * 8 * 9.6)</option>
                                          <option>32 Feet , 14 Ton (32 * 8 * 8)</option>
                                          <option>32 Feet , 14 Ton hq (32 * 8 * 9.6)</option>
                                          <option>32 Feet , 17 Ton (32 * 8 * 8)</option>
                                          <option>32 Feet , 17 Ton hq (32 * 8 * 9.6)</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="sel1">Source of Lead (select one):</label>
                                        <select class="form-control" id="sel1" name="lead_from">
                                            <option>+91 9717940842</option>
                                            <option>+91 7011893820</option>
                                            <option>+91 9350125636</option>
                                            <option>+91 9911695753</option>
                                            <option>+91 8800119298</option>
                                            <option>Indiamart</option>
                                            <option>Misc.</option>
                                          </select>
                                    </div>
                                 </div>
                              
                                  <br>
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Remarks</label>
                                    <textarea class="form-control"name="remarks" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                 <br/>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-primary">Create Job</button>
                                </div>
                                
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
