@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<h2 class="text-gray-700 uppercase tracking-wide font-semibold">Articles and Projects</h2>		
	<div class="posts text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 row-gap-10 col-gap-12 pb-16">
	@foreach ($posts as $post)
		<div class="post mt-8">
			<div class="relative inline-block">
				<a href="">
					<img src="/cover1.png" alt="nature" class="hover:opacity-75 rounded transition ease-in-out duration-150" style="height:200px; width: 150px;">
				</a>
				<a href="https://doi.org/">
				<div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
					<div class="font-semibold text-white text-xs flex justify-center items-center h-full">
						DOI
					</div>
				</div>
				</a>
			</div>
			<a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
				{{ $post->title }}
			</a>
			<div class="text-gray-600 text-xs mt-1">
				Eike Caldeweyher
			</div>
		</div>
	@endforeach
	</div> 
</div>
@endsection
