@props([
    'title',
    'name',
    'placeholder' => '',
	'type' => 'text',
	'value' => '',
    'helptext' => ''
])
<div {{ $attributes }}>
	<label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">{{ $title }}</label>
	<input
		type="{{ $type }}"
		name="{{ $name }}"
		id="{{ $name }}"
		placeholder="{{ $placeholder }}"
		value="{{ old($name, $value) }}"
		class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
    @if($helptext)
        <p class="mt-2 text-sm text-gray-500">
            {{ $helptext }}
        </p>
    @endif
	@error($name)
		<div class="mt-1 text-red-600">{{ $message }}</div>
	@enderror
</div>
