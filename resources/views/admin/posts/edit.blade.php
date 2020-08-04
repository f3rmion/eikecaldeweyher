@extends('layouts.app')

@section('content')
<div class="container mx-auto">
<form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
	@csrf

    <x-input.form-2column title="Update Post" description="Enter your updated details">

      <div class="grid grid-cols-6 gap-6">

        <x-input.text
          class="col-span-4"
          name="title"
          title="Title"
		  value="{{ $post->title }}"
        />

        <x-input.textarea
          class="col-span-4"
          name="body"
          title="Body"
		  value="{{ $post->body }}"
        />

        <div class="col-span-4">
			<label for="Authors" class="block text-sm font-medium leading-5 text-gray-700">Authors</label>
			@livewire('author-select', ['authors' => $post->authors ?? ['']])
		</div>

        <div class="col-span-4">
			<label for="Tags" class="block text-sm font-medium leading-5 text-gray-700">Category</label>
			<livewire:category-select :categories="$post->category()->pluck('name')->toArray()"/>
		</div>

        <div class="col-span-4">
			<label for="Tags" class="block text-sm font-medium leading-5 text-gray-700">Tags</label>
			<livewire:tag-select :tags="$post->tags()->pluck('name')->toArray()"/>
		</div>

        <x-input.text
          class="col-span-4"
          name="doi"
          title="DOI"
		  value="{{ $post->doi }}"
        />

		<div class="col-span-4">
		  <label class="block text-sm font-medium leading-5 text-gray-700 mb-1" for="cover">Cover</label>
			  <input
			  id="cover"
			  name="cover"
			  value="{{ old($post->cover) }}"
			  type="file">
			  @error('cover')
				  <p class="text-red-500 text-sm italic">{{ $message }}</p>
			  @enderror
		</div>

        <div class="col-span-6">
            <span class="inline-flex rounded-md shadow-sm">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                  Update
              </button>
            </span>

        </div>

      </div>

    </x-input.form-2column>
</form>
</div>
@endsection
