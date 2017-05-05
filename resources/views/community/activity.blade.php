@extends('layouts.master')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default" style="background-color: #fefefe; border:none; box-shadow: none;">
        <div class="panel-body">
          <div class="col-md-12 text-center">
            <img src="{{asset('img/guas.png')}}" class="img-circle" height="100px;" width="100px" />
            <h4>Skate Yogyakarta</h4>
            <p style="font-size: 12px">Yogyakarta</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
          </div>
        </div>  
      </div>
    </div>

    <div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body" style="padding: 10px;">
          <img src="{{asset('img/back.jpg')}}" width="100%">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-body" style="padding: 10px;">
          <img src="{{asset('img/back.jpg')}}" width="100%" />
          <img src="{{asset('img/guas.png')}}" class="img-circle" height="25px;" width="25px" /> Budi
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-body" style="padding: 10px;">
          <img src="{{asset('img/back.jpg')}}" width="100%">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection