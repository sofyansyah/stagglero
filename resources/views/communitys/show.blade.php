@extends('layouts.master')

<style type="text/css">
	h4{
	}
	.title{
		font-size: 18px;
	}
	.submenu li{
		list-style-type: none;
		padding: 5px 20px;
		display: inline-block;

	}	
</style>
@section('content')
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body" style="padding: 10px;">
				<div class="col-md-2">
					<img src="{{asset('img/guas.png')}}" class="img-circle" height="100px" width="100px">
					@if ($community->user_id ==Auth::id())
					<form action="/communitys/{{$community->id}}" method="POST" class="pull-right" style="">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}

						<button class="btn btn-danger btn-sm">delete</button>
					</form>
					<a href="/communitys/{{$community->id}}/edit">edit</a>
					@endif
					
				</div>
				<div class="col-md-10">
					<p class="title"><b>{{$community->title}}</b></p>
					<span>{{$community->location}}</span>
					<p>{{$community->description}}</p>
					{{$community->tags}}
				</div>
			</div>

			<div class="panel-footer">
				<ul class="submenu">
					<li>Activity</li>
					<li>Discuss</li>
					<li>Member</li>
				</ul>
			</div>
		</div>
	</div>
</div>



@endsection