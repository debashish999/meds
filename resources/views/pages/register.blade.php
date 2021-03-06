@extends('layouts.app')

@section('content')
<form method="POST" action="register">
@csrf
<div class="form-group">
  
  <label for="exampleInputUsername">Name</label>
  <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="UsernameHelp" placeholder="Enter Username" name="name">
  <small id="UsernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
</div>
  <div class="form-group">
  
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
            <button type="submit" id="btnLogin" class="btn btn-primary">Submit</button>


@endsection

<style>
.form-group{
    margin-left:10%;
    width:70%;
}
#btnLogin{
    margin-left:10%;
}

</style>