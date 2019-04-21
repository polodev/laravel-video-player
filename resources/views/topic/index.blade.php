@extends('layouts.app')

@section('content')
<div class=''>
	<h2>All topics</h2>
	<div class="mb-3">
		<a href='{{ route('topic.create') }}' class='btn btn-info'>Create a topic</a>
	</div>

	@foreach ($topics as $topic)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='d-flex justify-content-between'>
					<h4>
						<a href="{{ route('topic.show', ['topic' => $topic->id]) }}">
							 {{ $topic->title }} 
							 @if($topic->series)
							 	- ({{count($topic->series)}})
							 @endif
						</a>
					</h4>
					<form onsubmit="return confirm('Are you sure you want to delete this entry')" method="post" action="{{ route('topic.destroy', ['topic' => $topic->id]) }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
			</div>
		</div>
	@endforeach
	{{$topics->links()}}
	@if(!count($topics))
		<h3 class="text-danger">No topics found</h3>
	@endif
</div>


@endsection