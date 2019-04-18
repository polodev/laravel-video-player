@extends('layouts.app')

@section('content')
<h2>
	{{ $series->title }}
</h2>
<p>
	{{ $series->url }}
</p>
@endsection