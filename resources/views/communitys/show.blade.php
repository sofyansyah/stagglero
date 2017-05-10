@extends('layouts.master')

<style type="text/css">
	h4{
	}
	.title{
		font-size: 18px;
	}	
</style>
@section('content')
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body" style="padding: 10px;">
				<p class="title"><b>{{$community->title}}</b></p>
				<span>{{$community->location}}</span>
				<p>{{$community->description}}</p>

			</div>

			<div class="panel-footer">
				{{$community->tags}}
			</div>

		</div>
	</div>
</div>



@endsection