@extends('layouts.app')

@section('content')

<div class=''>
	<h2>Add a video</h2>

	<form action="{{ route('video.store') }}" method="post">
		@csrf
		<div class='mb-2'>
			<label for="topic">Topic</label>
			<select name="topic" class="form-control" id="topic">
				@foreach ($topics as $topic)
					<option value="{{$topic->id}}">{{$topic->title}}</option>
				@endforeach
			</select>
		</div>
		<!-- /.mb-2 -->
		<div class='mb-2'>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class='mb-2'>
			<label for="url">Url</label>
			<input type="text" name="url" id="url" class="form-control">
		</div>
		<div class='mb-2'>
			<button type="submit" class="btn btn-info">Add</button>
		</div>
	</form>
</div>



@endsection
