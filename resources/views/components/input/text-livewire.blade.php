@props([
	'model',
    'title',
    'name',
    'placeholder' => '',
    'type' => 'text'
])
<div {{ $attributes }}>
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">{{ $title }}</label>
	<input
		wire:model="{{ $model }}"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ old($name) }}"
        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
    @error($name)
        <div class="mt-1 text-red-600">{{ $message }}</div>
    @enderror
</div>
