@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Community</div>


				<div class="panel-body">
				<form action="/communitys/{{$community->id}}" method="POST">

			{{ method_field('PUT')}}
				{{ csrf_field()}}
				<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$community->title}}" disabled>
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" rows="5" id="description" placeholder="{{$community->description}}" name="description" value="{{$community->description}}"></textarea>
					</div>
					<div class="form-group">
						<label for="tags">Tags</label>
						<input type="text" class="form-control" id="tags" placeholder="Tags" name="tags" value="{{$community->tags}}">
					</div>

					<div class="form-group">
						<label for="image">Image</label>
						<input type="text" class="form-control" id="image" placeholder="Image" name="image" value="{{$community->image}}">
					</div>

					<!-- <div class="form-group">
						<label for="featured">Featured</label>
						<input type="text" class="form-control" id="featured" placeholder="Featured" name="featured">
					</div> -->

					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" id="location" placeholder="Location" name="location" value="{{$community->location}}" disabled>
					</div>
					<!-- <div class="form-group">
					<button>upload</button> max 5mb
					</div> -->
					<input type="submit" class="btn btn-success pull-right">
				</div>
			</div>
		</div>
	</div>
</div>

@endsection