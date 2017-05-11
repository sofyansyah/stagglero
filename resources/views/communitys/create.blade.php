@extends('layouts.master')
@section('js')
<script type="text/javascript">

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#showgambar').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#inputgambar").change(function () {
		readURL(this);
	});

</script>

@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Create Community</div>


				<div class="panel-body">
					<form action="/communitys" method="POST" enctype="multipart/form-data">
						{{ csrf_field()}}
						<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" id="title" placeholder="Title" name="title">
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<textarea class="form-control" rows="5" id="description" placeholder="Description" name="description"></textarea>
						</div>
						<div class="form-group">
							<label for="tags">Tags</label>
							<input type="text" class="form-control" id="tags" placeholder="Tags" name="tags">
						</div>

				<div class="form-group">
						<label for="image">Image</label>
						<input type="text" class="form-control" id="image" placeholder="Image" name="image">
					</div>

					<!-- <div class="form-group">
						<label for="featured">Featured</label>
						<input type="text" class="form-control" id="featured" placeholder="Featured" name="featured">
					</div> -->

					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" id="location" placeholder="Location" name="location">
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