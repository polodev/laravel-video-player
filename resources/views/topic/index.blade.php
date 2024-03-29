@extends('layouts.app')
@section('title', 'List of Topics')


@section('content')
<div class=''>
	<h2>All topics</h2>
	<div class="mb-3">
		<a href='{{ route('topic.create') }}' class='btn btn-info'>Create a topic</a>
	</div>

	<div class='card my-2'>
		<div class='card-body'>
	   <form action="{{ route('topic.index') }}" class="my-2">
	    <input value="{{ isset($tquery) ? $tquery : ''}}" class="form-control" type="search" name="tquery" placeholder="Search topic" aria-label="Search topic">
	    <button class="btn btn-outline-info mt-2" type="submit">Search topic</button>
	   </form>
		</div>
	</div>

	@foreach ($topics as $topic)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='d-flex justify-content-between'>
					<h4>
						<a href="{{ route('topic.show', $topic) }}">
							 {{ $topic->title }} 
							 @if($topic->series)
							 	- ({{count($topic->series)}})
							 @endif
						</a>
					</h4>
					<form onsubmit="return confirm('Are you sure you want to delete this entry')" method="post" action="{{ route('topic.destroy', $topic) }}">
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