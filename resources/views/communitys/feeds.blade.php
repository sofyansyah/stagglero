@extends('layouts.master')
<style type="text/css">

	.container{
		max-width:900px;
	}
	.container-fluid{
		max-width: 900px;
	}

	.menu-sidebar{padding: 0;
		background-color: none;
		max-width:250px;

	}
	.menu-sidebar img{
		height:14px;
		margin-right:10px;


	}
	.menu-sidebar li{padding: 10px;
		text-align:left;

	}
	ul{
		padding:0;
	}
	li{
		list-style-type: none;
		font-size:14px;
		font-family: 'Helvetica';
	}
	li:hover{
		background-color: #f9f9f9;
		color:#aaa;
	}
	.navbar-form {
		width: 100%!important;
		max-width: 250px!important;
	}
	.input-group{
		width: 100%;
		vertical-align: middle;
		white-space: nowrap;
		position: relative;
	}
	.content-idea h2{
		margin-left:8px;
		color:#444;
	}

	.content-idea{
		background-color:#fff; 
		border: 0.5px solid #f2f2f2;
		padding:15px; 
		margin-bottom:20px;
	}

	.content-idea p{
		font-size: 14px;

	}

	.create-idea{
		padding:20px 20px;
		border-radius:5px;
		background-color: #dd5f4c; 
		color:#fff;
		margin-bottom: 20px;
	}
	.icon-content li{
		display: inline;

	}
	.footer{
		text-align: right;
	}
	.footer li{
		display: inline;
		padding:5px;

	}
	.populer{

		border-radius:5px;
	}
	.populer li{
		padding:5px;
	}

	.btn-default{
		border:none !important;
		background-color: #fff!important;
		color:#aaa;
	}
	.col-sm-12{
		margin-bottom:20px;
	}
	.panel{
		border:none;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		border-radius:10px;
	}
	.pull-left{
		padding:0px !important;

	}
	.navbar-nav i{
		font-size: 15pt;
	}
	.navbar-nav a:hover{
		background-color: #fff !important;

	}

	.navbar-nav .btn i:hover{
		color:black;
	}
	.navbar-header{
		padding-left: 10px;
	}

	p{
		font-size:12pt;
	}
	.dropdown-menu:before{

		position: absolute;
		content: '';
		display: block;
		position: absolute;
		top: -10px;
		left: 120px;
		border-bottom: solid 10px #fff;
		border-left: solid 10px transparent;
		border-right: solid 10px transparent;
	}
	.dropdown-menu {
		border-color:#f9f9f9 !important;
		box-shadow:none!important;
	}
	.dropdown-menu li a{
		color:#aaa!important;
	}
	.dropdown-menu li a:hover{
		color:#dd5f4c!important;
	}
	.more-content {display:none;}
	.visible {display:block;}
</style>

@section('content')
<div class="container" style="margin:0 auto;">     

	@forelse( $communitys as $community )
	<div class="col-md-6">
		<div class="col-md-12 content-idea">
			<div class="col-md-2" style="float:left;">
				<img src="{{asset('img/avakomunitas/'.$community->image)}}">
			</div>
			<div class="col-md-8 col-xs-9" style="padding:0px;">
				<a href={{url('communitys/'.$community->id)}}><h4 style="padding:0px; margin:0px;">{{$community->title}}</h4></a>
				<p style="font-size: 12px;">{{$community->location}}</p>
			</div>
			<div class="col-md-2" style="padding:0px;">
				<a href="" class="participating">Join</a>
			</div>
			<div class="col-md-12" style="padding:0px;">
				<br/>
				<p>{{$community->description}}
				</p>
				<hr/>
				<div class="comment">
					{{$community->tags}}
					<span class="pull-right"><i class="fa fa-heart" style="color: #aaa; font-size: 20px; margin-right: 5px;"></i>
						<i class="fa fa-share" style="color: #aaa; font-size: 20px;"></i></span>
					</div>
					<hr/>
				</div>
			</div>
		</div>

		@empty
		No community

		@endforelse



	</div>

	@endsection

