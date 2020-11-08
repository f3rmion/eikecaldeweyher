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
			<li class="flex">
			  <div class="flex items-center space-x-4">
				<svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
				  <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
				</svg>
				<a href="{{ route('research.show', $post) }}" aria-current="page" class="text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">{{ $post->hashid()}}</a>
			  </div>
			</li>
		  </ol>
		</nav>	
		<div class="post-details pb-12 flex flex-col lg:flex-row">
			<div class="flex-none">
				<img src="{{ $post->imageUrl() }}" alt="cover" class="rounded object-contain h-64 w-64">
			</div>
			<div class="lg:ml-12 xl:mr-64">
				<h2 class="mt-4 lg:mt-0 font-semibold text-indigo-600 text-4xl leading-tight mt-1">{{ $post->title }}</h2>
				<div class="mt-4 lg:mt-0 text-gray-600">
					<span>{{ $post->getAuthors() }}</span>
				</div>
				<div class="text-gray-600">
					@empty($post->doi)
					@else
					<span>DOI: <a href="https://doi.org/{{ $post-> doi }}">{{ $post->doi }}</a></span>
					@endempty
				</div>
				
			
				<p class="mt-12">
					{!! $post->trixRichText()->where('field', 'body')->first()->content !!}
				</p>
				
			</div>
		</div><!--end post details-->

	</div><!--end container-->
@endsection
