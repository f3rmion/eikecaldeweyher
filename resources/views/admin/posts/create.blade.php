@extends('layouts.app')

@section('content')
<div class="container mx-auto">
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
	@csrf
    <x-input.form-2column title="Create Post" description="Enter your details">

      <div class="grid grid-cols-6 gap-6">

        <x-input.text
          class="col-span-4"
          name="title"
          title="Title"
        />

        <x-input.textarea
          class="col-span-4"
          name="body"
          title="Body"
        />

        <div class="col-span-4">
			<label for="Tags" class="block text-sm font-medium leading-5 text-gray-700">Category</label>
			<livewire:category-select />
		</div>

        <div class="col-span-4">
			<label for="Tags" class="block text-sm font-medium leading-5 text-gray-700">Tags</label>
			<livewire:tag-select />
		</div>

		<!-- cover_image --!>
		<div class="col-span-4">
		  <label class="block text-sm font-medium leading-5 text-gray-700 mb-1" for="cover">Cover</label>
			  <input
			  id="cover"
			  name="cover"
			  type="file">
			  @error('cover')
				  <p class="text-red-500 text-sm italic">{{ $message }}</p>
			  @enderror
		</div>
		<!-- /cover_image --!>

        <div class="col-span-6">
            <span class="inline-flex rounded-md shadow-sm">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                  Create
              </button>
            </span>

        </div>

      </div>

    </x-input.form-2column>
</form>
</div>
@endsection
