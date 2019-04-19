@extends('layouts.app')

@section('content')

<div class='card'>
	<div class='card-header'>
		<h2>{{ $current_video->file_name_without_extension }}</h2>
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
	
</div>
@endsection