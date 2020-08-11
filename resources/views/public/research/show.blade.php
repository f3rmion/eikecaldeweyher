@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4">
		<div class="post-details pb-12 flex flex-col lg:flex-row">
			<div class="flex-none">
				<img src="{{ $post->imageUrl() }}" alt="cover" class="rounded object-contain h-64 w-1/2">
			</div>
			<div class="lg:ml-12 xl:mr-64">
				<h2 class="font-semibold text-indigo-600 text-4xl leading-tight mt-1">{{ $post->title }}</h2>
				<div class="text-gray-600">
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
