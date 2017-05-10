@extends('layouts.master')
<style type="text/css">
	.populer li{
		text-decoration: none;
	}
</style>
@section('content')
<div class="container" style="margin:0 auto;"> 
	<div class="col-sm-3 pull-right" style="padding:0!important;">
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

	@forelse( $communitys as $community )
	<div class="col-md-9">
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
		No article

		@endforelse



	</div>

	@endsection

