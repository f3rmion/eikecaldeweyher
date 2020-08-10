@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<h2 class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Research and Development</h2>		
	<div class="posts text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 row-gap-10 col-gap-12 pb-16">
	@foreach ($posts as $post)
		<div class="post mt-8">
			<div class="relative inline-block">
				<a href="{{ route('research.show', $post) }}">
					<img src="{{ $post->imageUrl() }}" alt="nature" class="hover:opacity-75 rounded transition ease-in-out duration-150" style="height:200px; width: 150px;">
				</a>
				@if(isset($post->doi))
				<a href="https://doi.org/{{ $post->doi }}">
				<div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-800 rounded-full" style="right: -16px; bottom: -16px">
					<div class="font-semibold text-white text-xs flex justify-center items-center h-full">
						DOI
					</div>
				</div>
				</a>
				@endif
			</div>
			<div class="text-gray-600 text-xs mt-2">
				<button type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-50 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-indigo-200 transition ease-in-out duration-150">
				  {{ $post->category->name }}
				</button>
			</div>
			<div class="text-gray-600 text-xs mt-2 uppercase tracking-wide font-semibold">
				  Tags: {{ $post->tags->pluck('name')->implode(', ') }}
			</div>
			<a href="{{ route('research.show', $post) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-4">
				{{ $post->title }}
			</a>
			<div class="text-gray-600 text-xs mt-1">
			{{ $post->getAuthors() }}	
			</div>
		</div>
	@endforeach
	</div> 
</div>
@endsection
