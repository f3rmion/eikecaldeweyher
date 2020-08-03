@props([
    'title',
    'name',
    'weekdays',
	'value' => '',
])
<div {{ $attributes }}>
	<label class="block text-sm font-medium leading-5 text-gray-700">{{ $title }}</label>

    @foreach(['Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag'] as $day)
    <div class="flex items-center">
      <input
        id="{{ $name }}.{{ $loop->index }}"
        type="checkbox"
        class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
        name="{{ $name }}[]"
        value="{{ $loop->index }}"
        @if(in_array($loop->index, $weekdays)) checked="checked" @endif
      >
      <label for="{{ $name }}.{{ $loop->index }}" class="ml-2 block text-sm leading-5 text-gray-900">
          {{ $day }}
      </label>
    </div>
    @endforeach

	@error($name)
		<div class="mt-1 text-red-600">{{ $message }}</div>
	@enderror
</div>
