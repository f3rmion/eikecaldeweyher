@props([
	'key',
	'value',
])
<div {{ $attributes }}>

  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-0">
	<dt class="text-sm leading-5 font-medium text-gray-500">
	  {{ $key }}
	</dt>
	<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
      @if($value != "")
          {{ $value}}
      @else
          <span class="italic">-</span>
      @endif
	</dd>
  </div>

</div>
