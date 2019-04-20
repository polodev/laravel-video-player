@extends('layouts.app')

@section('content')

<div class='card'>
	<div class='card-header'>
		<h2>
			{{ $current_video->file_name_without_extension }}
			<small>(id: {{$current_video->id}})</small>
		</h2>
	</div>
	<!-- /.card-header -->
	<div class='card-body d-flex justify-content-center'>
		<my-video
		video_source2="{{$current_video->fullPathWithPrefix}}"
		@if($next)
			next_url="{{ route('video.show', ['video' => $next->id]) }}"
		@endif

		></my-video>
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->


<div class='video-block'>

@foreach ($all_videos as $video)
		<div class='card my-2 {{ $video->id === $current_video->id ? 'bg-warning' : ''}}'>
			<div class='card-body'>
				<div class='mb2'>
					Video No: {{ $video->video_index() + 1 }}  
				</div>

				<p>
					<a href="{{ route('video.show', ['video' => $video->id]) }}">
						{{ $video->file_name_without_extension }}
					</a>
				</p>
				<p class="text-info">
					<a href="{{$video->fullPathWithPrefix}}" target="_blank">Open video directly</a>
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