@extends('layouts.app')

@section('content')
<div class="container mx-auto rounded-lg">
<div class="flex justify-end">
<a href="{{ route('categories.create') }}">
	<button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
	  New Category
	</button>
</a>
</div>
<div class="flex flex-col mt-4">
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
      <table class="min-w-full divide-y divide-gray-200">
        <thead>
          <tr>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Post Count
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
		  @forelse ($categories as $category)
			  <tr class="bg-white">
				<td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
				  {!! \Illuminate\Support\Str::words($category->name, 8, '...') !!}
				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
				  {{ $category->posts_count }}
				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium">
				  <a href="{{ route('categories.edit', $category) }}" class="font-normal text-indigo-600 hover:text-indigo-900">Edit</a>
				  <form method="POST" action="{{ route('categories.delete', $category) }}">
					@csrf
					<button type="submit" class="text-medium text-indigo-600 hover:text-indigo-900">
						Delete
					</button>
				  </form>
				</td>
			  </tr>
		  @empty
		  	  No categories yet.
		  @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection
