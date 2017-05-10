@extends('layouts.master')

<style type="text/css">

h4{

}
.title{
	font-size: 18px;
}
	
.col-md-7 > img{
border: 1px solid #ddd;
}
</style>

@section('content')


<div class="container">
	<div class="col-md-12">
		<div class="col-md-7">
		<img src="{{asset('img/oaka.JPG')}}" width="100%"/>
		</div>
		<div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-body" style="padding: 10px;">
				<img src="{{asset('img/guas.png')}}" class="img-circle pull-left" height="30" width="30" style="margin-right: 5px;">
				<p>{{$community->username}}</p>
					

					<p class="title"><b>{{$community->title}}</b></p>
					<span>{{$community->location}}</span>
					<p>{{$community->description}}</p>

				</div>

				<div class="panel-footer">
					{{$community->tags}}
					<i class="fa fa-comment pull-right"> 10</i>
					<i class="fa fa-heart pull-right"> 190</i>
				</div>

			</div>
		</div>
	</div>
</div>


@endsection