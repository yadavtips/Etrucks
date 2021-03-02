@extends('layouts.app_admin')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
@section('form')
@if (auth()->user()->email == "yadavtips@gmail.com" || auth()->user()->email == "abhikk100@gmail.com"  )
    
<table class="table table-striped">
  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif

  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Delete User</th>
      <th scope="col">Change Password</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->name}}</th>
      <td>{{$user->email}}</td>
      <td>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
Delete User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          <form action="{{ route('account.destroy',$user->id) }}" method="POST" >
              @method('DELETE')
              @csrf
          <button type="submit" class="btn btn-danger">Delete</button></td>
          
          </form>
      </div>
    
    </div>
  </div>
</div>
         
      <td> <form action="{{ route('account.update',$user->id) }}" method="POST" >
          @method('PUT')
          @csrf
          <input name="new_password" class="form-group" minlength="8">
      <button type="submit" class="btn btn-danger">Update Password</button></td>
      </form>
  </td>
    </tr>
 @endforeach
  </tbody>
</table>
@else
 <a style="color:red;">   Only Admin Can Access This Page </a>
@endif
@endsection
