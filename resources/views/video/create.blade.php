@extends('layouts.app')

@section('content')

<div class='container'>
	<h2>Add a video</h2>

	<form action="{{ route('video.store') }}" method="post">
		@csrf
		<div class='form-group'>
			<label for="topic">Topic</label>
			<select name="topic" class="form-control" id="topic">
				@foreach ($topics as $topic)
					<option value="{{$topic->id}}">{{$topic->title}}</option>
				@endforeach
			</select>
		</div>
		<!-- /.form-group -->
		<div class='form-group'>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class='form-group'>
			<label for="url">Url</label>
			<input type="text" name="url" id="url" class="form-control">
		</div>
		<div class='form-group'>
			<button type="submit" class="btn btn-info">Add</button>
		</div>
	</form>
</div>



@endsection