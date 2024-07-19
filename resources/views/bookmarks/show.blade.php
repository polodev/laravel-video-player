@extends('layouts.app')
@section('title', 'Single Bookmark: ' .  $bookmark->title )

@section('content')
<h2>
	<a href="{{ route('bookmarks.index') }}">
		Bookmark::
	</a>
	 {{ $bookmark->title }}
</h2>
{{-- @if(count($topic->series))
	<p>All Series under {{$topic->title}} </p>
	@component('series.partials.all_series', ['all_series' => $paginate_series,])
	@endcomponent
	{{$paginate_series->links()}}
@else
	<h3>No series found for {{$topic->title}}</h3>
@endif --}}



@endsection