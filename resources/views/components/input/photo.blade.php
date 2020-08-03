@props([
	'model' => '',
    'title',
	'name',
	'image',
])
<div {{ $attributes }}>

	<label class="block text-sm leading-5 font-medium text-gray-700">
	  {{ $title }}
	</label>
	<div class="mt-2 flex items-center">
	  <span class="h-32 w-32 rounded-full overflow-hidden bg-gray-100">
		  <img class="w-full h-full flex-shrink-0 mx-auto bg-black rounded-full" src="{{ $image }}" alt="">
	  </span>
	  <span class="ml-5 rounded-md shadow-sm">
		  <input type="file" id="{{ $name }}" name="{{ $name }}">
	  </span>
	</div>

	@error($name)
		<div class="mt-1 text-red-600">{{ $message }}</div>
	@enderror
</div>
