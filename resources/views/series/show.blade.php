@extends('layouts.app')

@section('content')
<h2>
	SERIES:: {{ $series->title }}
</h2>
<h3>
	<form method="post" action="{{ route('series.generate_videos', ['series' => $series->id]) }}">
		@csrf
		<button type="submit" class='btn btn-info'>
			Generate / Regenerate Videos
		</button>
	</form>
</h3>
<p>
	{{ $series->url }}
</p>

<div class='all-videos'>
	@foreach ($series->videos as $video)
		<div class='card my-2'>
			<div class='card-body'>
				<div class='mb2'>
					Video No: {{ $video->video_index() + 1 }} 
				</div>

				<p>
					<a href="{{ route('video.show', ['video' => $video->id]) }}">
						{{ $video->file_name_without_extension }}
					</a>
				</p>
				<p>
					<small> <span class="text-info">Path:</span> {{ $video->path_name }} </small> 
					<br>
					<small> Status: {{ $video->completed ? "Completed" : 'Not Completed' }} </small>
				</p>
			</div>
		</div>

	@endforeach
</div>



@endsection