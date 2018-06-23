@extends('layout/default')

@section('content')
@if(session('error'))
{{session('error')}}
@endif
  <form method="post">
    @csrf

<div class="container-fluid text-light text-justify" id="aboutUs">
    <?php

$fields = ['name'=>'text', 'email'=>'email', 'password'=>'password', 'password_confirmation'=>'password'];
    ?>
@foreach($fields as $field=>$type)
     <div class="form-group">
    <label for="{{$field}}">Enter your {{$field}}</label>
    <input type="{{$type}}" class="form-control" name="{{$field}}" value="{{old($field)}}" required></div>
@endforeach


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" id="moreBtn"">Submit</button>

</div>
</form>
@endsection 


<!-- 
  <div class="form-group">
    <label for="email">Enter your Email address</label>
    <input type="email" class="form-control" name="email" required>
  </div>

  <div class="form-group">
    <label for="password">Enter your Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>

  <div class="form-group">
    <label for="password_confirmation">Confirm your Password</label>
    <input type="password" class="form-control" name="password_confirmation" required>
  </div>
 -->