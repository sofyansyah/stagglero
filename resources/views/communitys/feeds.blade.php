@extends('layouts.master')

<style type="text/css">
	.fa{
		padding-right: 5px;
	}
</style>
@section('content')

<div class="container" style="max-width: 900px;">
@forelse ($communitys as $community)

	<div class="col-md-4 col-sm-6 col-xs-12">
	<a href={{url('communitys/'.$community->id)}}>

		<div class="panel panel-default">
		<div class="panel-body" style="padding: 0px;">
		<p>{{$community->username}}</p>
		<img src="{{asset('/img/oaka.JPG')}}" width="250"/>
			<p>{{$community->title}}</p>
			<p>{{$community->description}}</p>
		</div>
		</a>
			<div class="panel-footer">
				{{$community->tags}}
				<i class="fa fa-comment pull-right"> 10</i>
				<i class="fa fa-heart pull-right"> 190</i>
			</div>
			
			
		</div>
	</div>
@empty
No article

@endforelse

</div>

@endsection