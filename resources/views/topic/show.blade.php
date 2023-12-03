@extends('layouts.app')
@section('title', 'Single Topic: ' .  $topic->title )

@section('content')
<h2>
	TOPIC:: {{ $topic->title }}
</h2>
@if(count($topic->series))
	<p>All Series under {{$topic->title}} </p>
	@component('series.partials.all_series', ['all_series' => $paginate_series,])
	@endcomponent
	{{$paginate_series->links()}}
@else
	<h3>No series found for {{$topic->title}}</h3>
@endif



@endsection