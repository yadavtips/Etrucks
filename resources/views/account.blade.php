@extends('layouts.app_admin')
@section('form')

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
            <form action="{{ route('account.destroy',$user->id) }}" method="POST" >
                @method('DELETE')
                @csrf
            <button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        <td> <form action="{{ route('account.update',$user->id) }}" method="POST" >
            @method('PUT')
            @csrf
            <input name="new_password" class="form-group">
        <button type="submit" class="btn btn-danger">Update Password</button></td>
        </form>
    </td>
      </tr>
   @endforeach
    </tbody>
  </table>
@endsection
