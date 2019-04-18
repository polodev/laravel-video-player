@extends('layouts.app')

@section('content')
<h2>
	SERIES:: {{ $series->title }}
</h2>
<p>
	{{ $series->url }}
</p>
@endsection