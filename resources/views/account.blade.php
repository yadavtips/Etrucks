@extends('layouts.app_admin')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
@section('form')
{{-- @if (auth()->user()->email == "yadavtips@gmail.com" || auth()->user()->email == "abhikk100@gmail.com"  )
 --}}    
 @if(1==1)
<table class="table table-striped">
  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif

<style>

  body{
    font-family: 'Poppins', sans-serif;
  }

  .account-navbar{
    line-height: 0.5rem !important;
  }

  .form-check, .form-group {
    margin-bottom: 0;
    padding: 5px !important;
}
</style>

<div class="container">
<nav class="text-center account-navbar">
  <br>
  <br>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-Success" data-toggle="modal" data-target="#exampleModalCenter">
  Register New User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-white">
      <div class="modal-header bg-dark-gradient ">
        <h5 class="modal-title " id="exampleModalCenterTitle">Register New User</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-warning-gradient">
     
          <form method="POST" class="text-white" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>

                  <div class="col-md-6">
              <input type="phone" id="custId" class="form-control" name="admin_phone">
          </div>
      </div>
              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row">
                

                  <div class="col-md-6">
              <input type="hidden" id="custId" class="form-control" value="#yadav@123_secret" name="secret">
          </div>
      </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
                  </div>
              </div>
          </form>
      
      </div>
     
    </div>
  </div>
</div>
</nav>
<div class="row">
  <div class="col-md">
  <thead>
    <tr>
      <th scope="col">Name</th>
      {{-- <th scope="col">Account Type</th> --}}
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Company Name</th>
      <th scope="col">City</th>
      <th scope="col">Truck Type</th>
      <th scope="col">Manage User</th>
      {{-- <th scope="col">Update Password</th> --}}
    </tr>
  </thead>
  <tbody>
      @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->name}}</th>
      <td>{{$user->email}}</td>
      <td>{{$user->admin_phone}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td>
            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#{{ $user->id }}">
              Manage User
              </button>

        <div class="modal fade" id="{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-inner">
            <div class="modal-header bg-danger-gradient">
              <h5 class="modal-title text-white" id="{{ $user->id }}Title">Manage User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body bg-info-gradient text-white font-weight-bolder">

              Name: &nbsp;&nbsp; {{$user->name}} <br><br>
              Email: &nbsp;&nbsp; {{ $user->email }}<br><br>

              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                Delete User
                </button>
                <br><br>

                <form action="{{ route('account.update',$user->id) }}" method="POST" >
                  @method('PUT')
                  @csrf
                  <input name="new_password" class="form-group" minlength="8">
              <button type="submit" class="btn btn-dark btn-sm">Update Password</button></td>
              </form>
            
            </div>

            {{-- <div class="modal-footer">
              
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
             
            </div> --}}
            </div>
          </div>
          </div></td>
      <td>

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
         
      {{-- <td> <form action="{{ route('account.update',$user->id) }}" method="POST" >
          @method('PUT')
          @csrf
          <input name="new_password" class="form-group" minlength="8">
      <button type="submit" class="btn btn-warning btn-sm">Update Password</button></td>
      </form>
  </td> --}}
    </tr>
 @endforeach
  </tbody>
</table>

</div>
@else
 <a style="color:red;">   Only Admin Can Access This Page </a>
@endif
</div>
</div>

@endsection
