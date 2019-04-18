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


@endsection