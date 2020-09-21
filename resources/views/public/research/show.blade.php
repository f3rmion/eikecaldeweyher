@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4">
		<h2 class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">
			<a href="{{ route('research.index') }}">Research and Development /</a>
		</h2>		
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
