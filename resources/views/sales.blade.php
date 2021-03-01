@extends('layouts.app_admin')
@section('form')
<br>
<br>
<div class="container">
    <div class="row">
        @foreach ($count as $user)
    
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                 <h3> <strong>{{$user}}</strong></h3>
                 <p></p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Total leads : </li>
                  <li class="list-group-item">Leads Converted :</li>
                  <li class="list-group-item">Total Target : </li>
                </ul>
              </div>
        </div>
                
        @endforeach
    </div>
</div>
@endsection
