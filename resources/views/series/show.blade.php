@extends('layouts.app')

@section('content')
<h2>
	SERIES:: {{ $series->title }}
</h2>
<div class="my-3 d-flex align-items-center">
  <p class="mr-2">
    Unders topics::
  </p>
  @if($series->topics)
    <div class='py-2'>
      @foreach ($series->topics as $topic)
        <a class="btn btn-primary" href="{{ route('topic.show', $topic) }}">
          {{$topic->title}}
        </a>
      @endforeach
    </div>
  @endif

</div>

<div class="my-3 d-flex align-items-center">
  <p class="mr-2">Action:: </p>
  <div class="d-flex">
    <a class="btn btn-primary mr-2" href="{{ route('series.edit', $series) }}">Edit</a>
    <form onsubmit="return confirm('Are you sure you want to delete this?')" method="post" action="{{ route('series.destroy', $series) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
</div>



<div class="my-3">
  <form class="d-inline-block" method="post" action="{{ route('series.generate_videos', $series) }}">
    @csrf
    <button type="submit" class='btn btn-info'>
      Generate / Regenerate Videos
    </button>
  </form>
  <form class="d-inline-block" method="post" action="{{ route('series.series_video_merge', $series) }}">
    @csrf
    <button type="submit" class='btn btn-info'>
      Merge Videos
    </button>
  </form>
  <form class="d-inline-block" method="post" action="{{ route('series.delete_videos', $series) }}">
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
					<a href="{{ route('video.show', $video) }}">
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
        <p>Type: {{$video->file_type}} </p>
			</div>
		</div>

	@endforeach
</div>



@endsection
