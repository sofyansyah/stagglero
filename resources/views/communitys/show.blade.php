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
	.dropmenu li{
		padding: 5px 0px;
		margin-bottom: 5px;
	}	
	.tags{
		padding: 5px;
		border: 1px solid #ddd;
	}
	.edit-delete li{
		display: inline-block;
	}

	form{
		margin:0px;
	}
	.panel-footer{
		background-color: #fefefe!important;
		border:none!important;
	}
	.panel-body{
		padding: 40px 5px!important; margin-bottom: 40px;
	}
</style>
@section('content')
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body" style=>
				<div class="col-md-2">
					<img src="{{asset('img/guas.png')}}" class="img-circle" height="100px" width="100px">
				</div>
				<div class="col-md-8">
					<p class="title"><b>{{$community->title}}</b></p>
					<span>{{$community->location}}</span>
					<p>{{$community->description}}</p>
					<span class="tags">{{$community->tags}}</span>
				</div>
				<div class="col-md-2">
					<ul class="edit-delete text-right">
						<li><button class="btn btn-danger">Join</button></li>
						@if ($community->user_id ==Auth::id())
						<li><div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="padding: 14px;">
								<span class="caret"></span></button>
								<ul class="dropdown-menu dropmenu">
									<li><form action="/communitys/{{$community->id}}" method="POST" class="pull-right" style="width:10px;">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<p style="padding-left:20px;">delete</p>
									</form></li>
									<li><a href="/communitys/{{$community->id}}/edit">edit</a></li>
									@endif
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="panel-footer">
			<ul class="submenu text-center">
				<li><a href="#">Activity</a></li>
				<li><a href="#">Discuss</a></li>
				<li><a href="#">Member</a></li>
			</ul>
		</div>
		
	</div>
</div>



@endsection