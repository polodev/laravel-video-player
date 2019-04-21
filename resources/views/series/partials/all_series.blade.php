	@foreach ($all_series as $series)
		<div class='card mb-3'>
			<div class='card-body'>
				<div class='row'>
					<div class='col-sm-9'>
						<h3>
							<a href="{{ route('series.show', ['series' => $series->id]) }}">
								 {{ $series->title }} 
							</a>
						</h3>
					</div>
					<div class='col-sm-3'>
						<div class="d-flex justify-content-end">
							<a class="btn btn-primary mr-2" href="{{ route('series.edit', ['series' => $series->id]) }}">Edit</a>
							<form onsubmit="return confirm('Are you sure you want to delete this?')" method="post" action="{{ route('series.destroy', ['series' => $series->id]) }}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</div>
					</div>
				</div>
				<!-- /.d-flex -->
{{-- 				@if($series->topic && $topic_label)
				<div class='py-2'>
					<a class="btn btn-primary" href="{{ route('topic.show', ['topic' => $series->topic->id]) }}">
						{{$series->topic->title}}
					</a>
				</div>
				@endif
 --}}				<p> {{$series->url}} </p>
			</div>
		</div>
	@endforeach
	@if(!count($all_series))
	 <h3 class="text-danger"> No series Found </h3>
	@endif
