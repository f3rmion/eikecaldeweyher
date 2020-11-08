@extends('layouts.app')

@section('content')
<div class="container mx-auto pl-4 lg:p-4 lg:p-0">
	<nav class="flex mb-8" aria-label="Breadcrumb">
	  <ol class="bg-white rounded-md shadow px-6 flex space-x-4">
		<li class="flex">
		  <div class="flex items-center">
			<a href="{{ route('welcome') }}" class="text-gray-400 hover:text-gray-500">
			  <!-- Heroicon name: home -->
			  <svg class="flex-shrink-0 h-5 w-5 transition duration-150 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
				<path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
			  </svg>
			</a>
			<span class="sr-only">Home</span>
		  </div>
		</li>
		<li class="flex">
		  <div class="flex items-center space-x-4">
			<svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
			  <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
			</svg>
			<a href="{{ route('research.index') }}" class="text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">Research</a>
		  </div>
		</li>
	  </ol>
	</nav>
	<div class="posts text-sm w-full lg:pl-0 pr-16 lg:pr-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 row-gap-10 col-gap-12 pb-16">
	@foreach ($posts as $post)
		<div class="post mt-8">
			<div class="relative inline-block">
				<a href="{{ route('research.show', $post) }}">
					<img src="{{ $post->imageUrl() }}" alt="cover" class="hover:opacity-75 rounded-lg transition ease-in-out duration-150 object-contain h-64 w-full" >
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
