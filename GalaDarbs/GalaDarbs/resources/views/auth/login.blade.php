@extends('layout/default')

@section('content')
@if(session('error'))
{{session('error')}}
@endif
  <form method="post">
    @csrf
  <form method="post">
    @csrf

<div class="container-fluid" id="aboutUs">


  <div class="form-group text-light text-justify">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group text-light text-justify">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-check text-light text-justify">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" id="moreBtn">Submit</button>

</div>
</form>
@endsection 