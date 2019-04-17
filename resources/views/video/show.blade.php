@extends('layouts.app')

@section('content')
<h2>
	{{ $video->title }}
</h2>
<p>
	{{ $video->url }}
</p>
@endsection