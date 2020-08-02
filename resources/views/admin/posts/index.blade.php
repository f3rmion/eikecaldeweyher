@extends('layouts.app')

@section('content')
<ul>
@forelse ($posts as $post)
	<li>{{ $post->title }}</li>
@empty
	No posts yet.
@endforelse
</ul>
@endsection
