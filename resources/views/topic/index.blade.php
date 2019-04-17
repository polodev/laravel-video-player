@extends('layouts.app')

@section('content')
<div class='container'>
	@foreach ($topics as $topic)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='d-flex justify-content-between'>
					<h3>
						<a href="{{ route('topic.show', ['topic' => $topic->id]) }}">
							 {{ $topic->title }} 
						</a>
					</h3>
					<form method="post" action="{{ route('topic.destroy', ['topic' => $topic->id]) }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
			</div>
		</div>
	@endforeach
</div>


@endsection