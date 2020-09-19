@extends('layouts.app')

@section('content')
<div class="container mx-auto">
<form method="POST" action="{{ route('tags.store') }}">
	@csrf
    <x-input.form-2column title="Create Tag" description="Enter your details">

      <div class="grid grid-cols-6 gap-6">

        <x-input.text
          class="col-span-6 md:col-span-4"
          name="name"
          title="Name"
        />

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
