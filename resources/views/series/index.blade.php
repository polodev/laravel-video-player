@extends('layouts.app')

@section('content')
<div class=''>
	<h2>All series</h2>
	<div class="mb-3">
		<a href='{{ route('series.create') }}' class='btn btn-info'>Create a series</a>
	</div>
	@foreach ($all_series as $series)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='d-flex justify-content-between'>
					<h3>
						<a href="{{ route('series.show', ['series' => $series->id]) }}">
							 {{ $series->title }} 
						</a>
					</h3>
					<form method="post" action="{{ route('series.destroy', ['series' => $series->id]) }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
				<!-- /.d-flex -->
				@if($series->topic)
				<div class='py-2'>
					<a class="btn btn-primary" href="{{ route('topic.show', ['topic' => $series->topic->id]) }}">
						{{$series->topic->title}}
					</a>
				</div>
				@endif
				<p> {{$series->url}} </p>
			</div>
		</div>
	@endforeach
	@if(!count($all_series))
	 <h3 class="text-danger"> No series Found </h3>
	@endif

</div>


@endsection