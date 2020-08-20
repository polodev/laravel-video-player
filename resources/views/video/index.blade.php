@extends('layouts.app')

@section('content')
<div class=''>
	@foreach ($videos as $video)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='d-flex justify-content-between'>
					<h3>
						<a href="{{ route('video.show', $video->id) }}">
							 {{ $video->title }} 
						</a>
					</h3>
					<form method="post" action="{{ route('video.destroy', $video->id) }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
				<!-- /.d-flex -->
				@if($video->topic)
				<div class='py-2'>
					<a class="btn btn-primary" href="{{ route('topic.show', $video->topic->id) }}">
						{{$video->topic->title}}
					</a>
				</div>
				@endif
				<p> {{$video->url}} </p>
			</div>
		</div>
	@endforeach
</div>


@endsection