@props([
    "name",
    "title",
    "description",
    "checked"
])

<div {{ $attributes }}>
    <div class="flex items-start">
      <div class="flex items-center h-5">
        <input type="hidden" name="{{ $name }}" value="0">
        <input
            id="{{ $name }}"
            name="{{ $name }}"
            value="1"
            type="checkbox"
            class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
            @if(old($name, $checked)) checked="checked" @endif
        >
      </div>
      <div class="ml-3 text-sm leading-5">
        <label for="{{ $name }}" class="font-medium text-gray-700">{{ $title }}</label>
        <p class="text-gray-500">{{ $description }}</p>
      </div>
    </div>
      @error($name)
        <div class="text-red-600">{{ $message }}</div>
      @enderror
</div>
