@extends('layouts.app')
@section('title', 'Single Bookmark: ' .  $bookmark->title )

@section('content')
<h2>
	<a href="{{ route('bookmarks.index') }}">
		Bookmark::
	</a>
	 {{ $bookmark->title }}
</h2>
@if(count($bookmark->videos))
	@foreach($bookmark->videos as $video)
		<div class="card my-1">
			<div class="card-body">
				<div class="d-lg-flex justify-content-between">
					<a href="{{ route('video.show', $video) }}">
						@if($series = $video->series)
							{{ $series->title }}:::
						@endif
						{{ $video->file_name_without_extension }}
					</a>
					<form method="post" action="{{ route('bookmarks.remove_from_bookmark', $bookmark->id) }}">
						@csrf
						<input type="hidden" name="video_id" value="{{ $video->id }}">
						<button type="submit" class="btn btn-warning">Remove Video</button>
					</form>
				</div>
			</div>
		</div>
	@endforeach
@else
	<h3>No Videos found for {{$bookmark->title}}</h3>
@endif



@endsection