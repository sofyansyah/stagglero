@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img src="{{asset('img/guas.png')}}" class="img-circle" height="150px" width="150px;" style="top:10;">
				<h1>{{$user->name}}</h1>
			<h5>{{$user->email}}</h5>
			<button class="btn btn-info">Message</button>
			</div>
			
			
		</div>
	</div>
</div>

@endsection


