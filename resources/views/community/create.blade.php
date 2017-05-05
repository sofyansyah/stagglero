@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Create Community</div>


				<div class="panel-body">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="title" class="form-control" id="title" placeholder="Title" name="title">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" rows="5" id="description" placeholder="Description" name="description"></textarea>
					</div>
					<div class="form-group">
						<label for="sel1">Location</label>
						<select class="form-control" id="sel1">
						<option>Jakarta</option>
							<option>Bandung</option>
							<option>Semarang</option>
							<option>Yogyakarta</option>
						</select>
					</div>
					<div class="form-group">
					<button>upload</button> max 5mb
					</div>
					<input type="submit" class="btn btn-success pull-right">
				</div>
			</div>
		</div>
	</div>
</div>

@endsection