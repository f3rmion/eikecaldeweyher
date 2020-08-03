@props([
    'title',
    'name',
    'placeholder' => '',
	'type' => 'text',
	'value' => '',
	'helptext' => '',
	'multiple' => '',
	'options'
])
<div {{ $attributes }}>
	<label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">{{ $title }}</label>
    <select name="{{ $name }}" class="mt-1 block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ $multiple }}">
	  @forelse ($options as $key => $value)
		  <option value="{{ $key }}">{{ $value->name }}</option>
	  @empty
	  @endforelse
    </select>
    @if($helptext)
        <p class="mt-2 text-sm text-gray-500">
            {{ $helptext }}
        </p>
    @endif
	@error($name)
		<div class="mt-1 text-red-600">{{ $message }}</div>
	@enderror
</div>
