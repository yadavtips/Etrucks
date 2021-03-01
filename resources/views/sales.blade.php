@extends('layouts.app_admin')
@section('form')
@foreach ($users as $user)
<div class="card">
    <div class="card-body">
        {{$user->name}}
    </div>
  </div>
@endforeach
<div class="container">
    <div class="row">
<div class="col-md-3">
    <div class="card">
        <div class="card-body">
        
        </div>
      </div>
</div>
    </div>

</div>
@endsection
