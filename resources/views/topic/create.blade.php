@extends('layouts.app')
@section('title', 'Topic Create')


@section('content')

<div class=''>
	<h2>Add a Topic</h2>

	<form action="{{ route('topic.store') }}" method="post">
		@csrf
		<div class='mb-2'>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class='mb-2'>
			<button type="submit" class="btn btn-info">Add</button>
		</div>
	</form>
</div>



@endsection
