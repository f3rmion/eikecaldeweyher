@extends('layouts.app')

@section('content')
<div class="flex items-center flex-col">
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
      <table class="min-w-full divide-y divide-gray-200">
        <thead>
          <tr>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Title
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Body
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Author
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Category
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Tags
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Published
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <!-- Odd row -->
		  @forelse ($posts as $post)
          <tr class="bg-white">
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
			  {!! \Illuminate\Support\Str::words($post->title, 8, '...') !!}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
			  {!! \Illuminate\Support\Str::words($post->body, 8, '...') !!}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
			  {{ $post->user->name }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
			  {{ $post->category->name }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
			  {{ $post->tags->implode('name', ', ') }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
			  {{ $post->is_published }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            </td>
		  </tr>
		  @empty
			No posts yet.
		  @endforelse
          <!-- More rows... -->
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
