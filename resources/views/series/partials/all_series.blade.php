	@foreach ($all_series as $series)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='row'>
					<div class='col-sm-9'>
						<h3>
							<a href="{{ route('series.show', $series) }}">
								 {{ $series->title }} 
							</a>
						</h3>
					</div>
					<div class='col-sm-3'>
						<div class="d-flex justify-content-end">
							<a class="btn btn-primary me-2" href="{{ route('series.edit', $series) }}">Edit</a>
							<form onsubmit="return confirm('Are you sure you want to delete this?')" method="post" action="{{ route('series.destroy', $series) }}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</div>
					</div>
				</div>
				<!-- /.d-flex -->
				@if($series->topics)
					<div class='py-2'>
						@foreach ($series->topics as $topic)
							<a class="btn btn-primary" href="{{ route('topic.show', $topic) }}">
								{{$topic->title}}
							</a>
						@endforeach
					</div>
				@endif

				<p> {{$series->url}} </p>
			</div>
		</div>
	@endforeach
	@if(!count($all_series))
	 <h3 class="text-danger"> No series Found </h3>
	@endif
