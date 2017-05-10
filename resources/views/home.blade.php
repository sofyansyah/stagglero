@extends('layouts.master')

<style>

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
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body">
					Buat komunitasmu sekarang <a href="{{url('communitys/create')}}" class="btn btn-success">Create</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-12 text-left">
				<div class="col-md-12 content-idea">
					<div class="col-md-1" style="float:left;">
						<img src="{{asset('img/heri.png')}}" width="32" height="32" style="border-radius: 2px; margin-left:-15px;">
					</div>
					<div class="col-md-9 col-xs-9" style="padding:0px;">
						<h2 style="padding:0px; margin:0px;">Sofyan Syah</h2>
						<p style="font-size: 12px;">Jakarta, Indonesia</p>
					</div>
					<div class="col-md-2" style="padding:0px;">
						<a href="" class="participating">Participating</a>
					</div>
					<div class="col-md-12" style="padding:0px;">
						<br/>
						<p>
							<b>Laundry Mobile Application</b>
						</p>
						<br/>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br/>
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<hr/>
						<div class="comment">
							<input type="text" class="form-control" style="border-radius:0!important; background:none!important; border:none!important; box-shadow:none!important;" placeholder="Write a comment..." aria-describedby="basic-addon1" style="background-color: #F9f9f9; border: 1px solid #f2f2f2; box-shadow: none;">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-3 text-left" style="padding:0!important;">
		<div class="panel">     
			<ul class="populer"><h4 style="padding-left: 4px; margin-top: -5px;color: #dd5f4c;">Popular Community</h4>
				<li><a href="">Laundry Online Application</a></li>
				<li><a href="">Weekend Mengajar</a></li>
				<li><a href="">Bersepeda ke Monas</a></li>
				<li><a href="">Website responsive</a></li>
				<li><a href="">Downhill bareng</a></li>
				<li><a href="">Kopdar komunitas mural</a></li>
				<li><a href="">Diskusi ukm di bogor</a></li>
			</ul>
		</div>   
		<div class="panel">     
			<ul class="populer"><h4 style="padding-left: 4px; margin-top: -5px; color: #dd5f4c;">Popular Post</h4>
				<li><a href="">Laundry Online Application</a></li>
				<li><a href="">Weekend Mengajar</a></li>
				<li><a href="">Bersepeda ke Monas</a></li>
				<li><a href="">Website responsive</a></li>
				<li><a href="">Downhill bareng</a></li>
				<li><a href="">Kopdar komunitas mural</a></li>
				<li><a href="">Diskusi ukm di bogor</a></li>
			</ul>
		</div>    
	</div> 

</div>
@endsection
