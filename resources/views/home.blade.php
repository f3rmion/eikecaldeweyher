@extends('layouts.app')

@section('content')
<div class="px-4">
  <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <li class="col-span-1 flex shadow-sm rounded-md">
      <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm leading-5 font-medium rounded-l-md">
        PO
      </div>
      <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
        <div class="flex-1 px-4 py-2 text-sm leading-5 truncate">
          <a href="{{ route('posts.index') }}" class="text-gray-900 font-medium hover:text-gray-600 transition ease-in-out duration-150">Posts</a>
		  <p class="text-gray-500">{{ $posts }}</p>
        </div>
      </div>
    </li>

    <li class="col-span-1 flex shadow-sm rounded-md">
      <div class="flex-shrink-0 flex items-center justify-center w-16 bg-purple-600 text-white text-sm leading-5 font-medium rounded-l-md">
        CA
      </div>
      <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
        <div class="flex-1 px-4 py-2 text-sm leading-5 truncate">
          <a href="{{ route('categories.index') }}" class="text-gray-900 font-medium hover:text-gray-600 transition ease-in-out duration-150">Categories</a>
          <p class="text-gray-500">{{ $categories }}</p>
        </div>
      </div>
    </li>

    <li class="col-span-1 flex shadow-sm rounded-md">
      <div class="flex-shrink-0 flex items-center justify-center w-16 bg-green-400 text-white text-sm leading-5 font-medium rounded-l-md">
        TA
      </div>
      <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
        <div class="flex-1 px-4 py-2 text-sm leading-5 truncate">
          <a href="{{ route('tags.index') }}" class="text-gray-900 font-medium hover:text-gray-600 transition ease-in-out duration-150">Tags</a>
          <p class="text-gray-500">{{ $tags }}</p>
        </div>
      </div>
    </li>
  </ul>
</div>
@endsection
