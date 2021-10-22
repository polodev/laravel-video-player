@extends('layouts.app')

@section('content')

<div class=''>
	<h2>
    Edit series
    <a href="{{ route('series.show', $series) }}">{{ $series->id }}</a>
</h2>


	<form action="{{ route('series.update', $series) }}" method="post">
		@csrf
		@method('PUT')
		<div class='form-group'>
			<label for="topic">Topic</label>
			<select name="topic[]" class="form-control" id="topic" multiple>
				@foreach ($topics as $topic)
					<option {{ $series->topics->contains($topic->id)  ? 'selected' : ''}} value="{{$topic->id}}">{{$topic->title}}</option>
				@endforeach
			</select>
		</div>
		<!-- /.form-group -->
		<div class='form-group'>
			<label for="title">Title</label>
			<input value="{{old('title', $series->title)}}" type="text" name="title" id="title" class="form-control">
		</div>
		<div class='form-group'>
			<label for="url">Url</label>
			<input value="{{old('url', $series->url)}}" type="text" name="url" id="url" class="form-control">
		</div>

		<div class='form-group'>
			<label for="hidden">Hidden</label>
			<select class="form-control" name="hidden" id="hidden">
				<option {{ old('hidden', $series->hidden) == 0 ? 'selected' : '' }} value="0">false</option>
				<option {{  old('hidden', $series->hidden) == 1 ? 'selected' : '' }} value="1">true</option>
			</select>
		</div>


		<div class='form-group'>
			<button type="submit" class="btn btn-info">Update</button>
		</div>
	</form>
</div>
@endsection


@push('extra_style')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
@endpush

@push('extra_script')
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script>
	$('#topic').select2();
</script>
@endpush
