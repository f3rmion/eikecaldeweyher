@props([
	'model' => '',
    'title',
	'name',
])
<div {{ $attributes }}>

    <label class="block text-sm leading-5 font-medium text-gray-700">
      {{ $title }}
    </label>
    <div class="mt-2 flex items-center">
	  <input type="file" wire:model="cover_image">
    </div>

    @error($name)
        <div class="mt-1 text-red-600">{{ $message }}</div>
    @enderror
</div>
