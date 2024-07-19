@extends('layouts.app')
@section('title', 'List of Bookmarks')


@section('content')
<div class=''>
	<h2> All Bookmarks </h2>
	<div class="mb-3">
		<a href='{{ route('bookmarks.create') }}' class='btn btn-info'>Create a Bookmark</a>
	</div>

	

	@foreach ($bookmarks as $bookmark)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='d-flex justify-content-between'>
					<h4>
						<a href="{{ route('bookmarks.show', $bookmark) }}">
							 {{ $bookmark->title }} 
							 ({{ $bookmark->videos_count }})
							 {{-- @if($topic->series)
							 	- ({{count($topic->series)}})
							 @endif --}}
						</a>
					</h4>
					<form onsubmit="return confirm('Are you sure you want to delete this entry')" method="post" action="{{ route('bookmarks.destroy', $bookmark) }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
			</div>
		</div>
	@endforeach
	{{$bookmarks->links()}}
	@if(!count($bookmarks))
		<h3 class="text-danger">No bookmark found</h3>
	@endif
</div>


@endsection