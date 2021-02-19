<div class="relative mt-8 md:mt-0 w-64">
	<label for="search" class="sr-only">Search</label>
	<div class="relative rounded-md shadow-sm">
		<input wire:model.debounce.500ms="search" 
			id="search" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Search" />
	</div>
	@if(strlen($search) >= 2)
		<div class="absolute inline-block text-left">
		  <div class="origin-top-right right-0 mt-2 w-56 rounded-md shadow-lg">
			<div class="rounded-md bg-white shadow-xs">
				@if ($searchResults->count() > 0)
					@foreach ($searchResults as $result)
						<a href="{{ route('research.show', $result->hashid()) }}" 
							class="block px-4 py-2 text-sm leading-5 text-gray-700 
								   hover:bg-gray-100 rounded hover:text-gray-900 focus:outline-none 
                                   focus:bg-gray-100 focus:text-gray-900">
							{{ $result['title'] }}
						</a>
					@endforeach
				@else
					<div class="px-3 py-3">No results for "{{ $search }}" </div>
				@endif
			</div>
		  </div>
		</div>
	@endif
</div>
