@extends('layouts.app')

@section('content')
<div class=''>
	<h2>All series</h2>
	<div class="mb-3">
		<a href='{{ route('series.create') }}' class='btn btn-info'>Create a series</a>
	</div>
	@component('series.partials.all_series', ['all_series' => $all_series, 'topic_label' => true ])
	@endcomponent

</div>


@endsection