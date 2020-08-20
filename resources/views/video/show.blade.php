@extends('layouts.app')

@section('content')

<div class='card'>
	<div class='card-header'>
		<h2>
			{{ $current_video->file_name_without_extension }}
			<small>
       (Media-no:  {{ $current_video->video_index() + 1 }} / {{ $all_videos_count }})   

      </small>
		</h2>
	</div>
	<!-- /.card-header -->
	<div class='card-body d-block justify-content-center ' id="video-player-card">
		<div class="d-flex justify-content-center">
      @if ($current_video->file_type == 'video')
        <my-video
          video_source="{{$current_render_link}}"
          @if($next)
            next_url="{{ route('video.show', $next->id) }}"
          @endif
        ></my-video>
      @else
        <my-pdf
          pdf_source="{{$current_render_link}}"
        >

        </my-pdf>
      @endif
		</div>
		<div class='my-2'>
			<p>
				You are watching Series:: <a href="{{ route('series.show', $current_video->series->id) }}">{{ $current_video->series->title }}</a>
			</p>
      <p> Path:</p>
      <p>{{ $current_video->path_name }}</p>
			<div class="mt-2">
				@if ($previous)
					<a class="btn btn-info mx-1" href="{{ route('video.show', $previous->id) }}">Previous video</a>
				@endif
				@if ($next)
					<a class="btn btn-info mx-1" href="{{ route('video.show', $next->id) }}">Next video</a>
				@endif
			</div>
		</div>
		<!-- /.my-2 -->
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->


<div class='video-block'>

@foreach ($all_videos as $video)
		<div class='card my-2 {{ $video->id === $current_video->id ? 'bg-warning text-white' : ''}}'>
			<div class='card-body'>
				<div class='mb'>
					Video No: {{ $video->video_index() + 1 }}  <br>
				</div>

				<div class="my-1">
					<a href="{{ route('video.show', $video->id) }}">
						{{ $video->file_name_without_extension }}
					</a>
				</div>
				<div class="text-info my-1 d-none">
					<a href="{{ route('render_video', $video->id) }}" target="_blank">Open video directly</a>
				</div>
				<div>
					<small> <span class="text-info">Path:</span> {{ $video->path_name }} </small>
					<br>
					<small> Status: {{ $video->completed ? "Completed" : 'Not Completed' }} </small>
				</div>
        <p>Type: {{ $video->file_type }} </p>
			</div>
		</div>
@endforeach

</div>
@endsection
