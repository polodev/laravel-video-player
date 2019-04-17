@extends('layouts.app')

@section('content')
<div class='container'>
	@foreach ($videos as $video)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='d-flex justify-content-between'>
					<h3>
						<a href="{{ route('video.show', ['video' => $video->id]) }}">
							 {{ $video->title }} 
						</a>
					</h3>
					<form method="post" action="{{ route('video.destroy', ['video' => $video->id]) }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
				<!-- /.d-flex -->
				<p> {{$video->url}} </p>
			</div>
		</div>
	@endforeach
</div>


@endsection