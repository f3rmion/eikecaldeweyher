@extends('layouts.app')

@section('content')
<div class="container mx-auto rounded-lg">
<div class="flex w-full justify-center md:justify-end">
<a href="{{ route('posts.create') }}">
	<button type="submit" class="py-2 px-4 border border-transparent text-lg md:text-base leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
	  New Post
	</button>
</a>
</div>
<div class="flex flex-col mt-8 md:mt-4">
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
      <table class="min-w-full divide-y divide-gray-200">
        <thead>
          <tr>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Title
            </th>
            <th class="hidden md:visible px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Author
            </th>
            <th class="hidden md:visible px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Category
            </th>
            <th class="hidden md:visible px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Tags
            </th>
            <th class="hidden md:visible px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Published
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
		  @forelse ($posts as $post)
			  <tr class="bg-white">
				<td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
				  {!! \Illuminate\Support\Str::limit($post->title, 15, '...') !!}
				</td>
				<td class="hidden md:visible px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
				  {{ $post->user->name }}
				</td>
				<td class="hidden md:visible px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
				  {{ $post->category->name }}
				</td>
				<td class="hidden md:visible px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
				  {!! \Illuminate\Support\Str::limit($post->tags->implode('name', ', '), 30, '...') !!}
				</td>
				<td class="hidden md:visible px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
				  {{ ($post->is_published == true) ? 'Yes' : 'No' }}
				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium">
				  <a href="{{ route('posts.edit', $post) }}" class="font-normal text-indigo-600 hover:text-indigo-900">Edit</a>
				  <form method="POST" action="{{ route('posts.publish', $post) }}">
					@csrf
					<button type="submit" class="text-indigo-600 hover:text-indigo-900">
					@if (!$post->is_published) 
						Publish
					@else
						Unpublish
					@endif
					</button>
				  </form>
				  <form method="POST" action="{{ route('posts.delete', $post) }}">
					@csrf
					<button type="submit" class="text-medium text-indigo-600 hover:text-indigo-900">
						Delete
					</button>
				  </form>
				</td>
			  </tr>
		  @empty
		  	  No posts yet.
		  @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection
