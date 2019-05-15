@extends('layouts.app')

@section('content')
<h2>
	SERIES:: {{ $series->title }}
</h2>

<div class="my-3">
  <form class="d-inline-block" method="post" action="{{ route('series.generate_videos', ['series' => $series->id]) }}">
    @csrf
    <button type="submit" class='btn btn-info'>
      Generate / Regenerate Videos
    </button>
  </form>
  <form class="d-inline-block" method="post" action="{{ route('series.delete_videos', ['series' => $series->id]) }}">
    @csrf
    <button type="submit" class='btn btn-danger'>
      Remove videos
    </button>
  </form>
</div>
<p class="my-3">
	Path: {{ $series->url }}
</p>

<div class='all-videos'>
	@foreach ($series->videos as $video)
		<div class='card my-2'>
			<div class='card-body'>
				<div class='my-1'>
					Video No: {{ $video->video_index() + 1 }}  <br/>
				</div>

				<div class="my-1">
					<a href="{{ route('video.show', ['video' => $video->id]) }}">
						{{ $video->file_name_without_extension }}
					</a>
				</div>
				<div class="text-info my-1 d-none">
					<a href="{{$video->fullPathWithPrefix}}" target="_blank">Open video directly</a>
				</div>
				<div class="my-1">
					<small> <span class="text-info">Path:</span> {{ $video->path_name }} </small>
					<br>
					<small> Status: {{ $video->completed ? "Completed" : 'Not Completed' }} </small>
				</div>
			</div>
		</div>

	@endforeach
</div>



@endsection
