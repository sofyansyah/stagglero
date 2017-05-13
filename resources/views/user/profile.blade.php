@extends('layouts.master')
<style type="text/css">
  .sosmed li{
    display: inline-block;
    border: 1px solid #ddd;
    padding: 5px;
  }

</style>

@section('content')
<div class="container">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-body text-center">
        <img src="{{asset('img/avatar/'.$user->avatar)}}" class="img-circle" height="150px" width="150px;" style="top:10;">
        <h1>{{$user->username}}</h1>
        <h5>{{$user->alamat}}</h5>
        <h5>{{$user->bio}}</h5>
        <ul class="sosmed">
          <li><a href="{{url('$user->facebook')}}"/>facebook </a></li>
          <li><a href="{{url('$user->twitter')}}"/>Twitter </a></li>
          <li><a href="{{url('$user->instagram')}}"/>Instagram </a></li>
        </ul>
        <a class="btn btn-info">Message</a>
        <a href="{{url('profile/'.$user->username.'/edit')}}" class="btn btn-warning">Edit</a>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <h4>Founder</h4>
    <h1>{{$user->title}}
    {{$user->description}}
    </h1>
    <hr>
  </div>

  <div class="col-md-12">
    <h4>Membered</h4>
    <hr>
  </div>

</div>

@endsection