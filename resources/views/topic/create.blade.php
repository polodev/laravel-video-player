@extends('layouts.app')

@section('content')

<div class='container'>
	<h2>Add a Topic</h2>

	<form action="{{ route('topic.store') }}" method="post">
		@csrf
		<div class='form-group'>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class='form-group'>
			<button type="submit" class="btn btn-info">Add</button>
		</div>
	</form>
</div>



@endsection