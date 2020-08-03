@props([
	'product',
])
<li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow">
<div class="flex-1 flex flex-col p-8">
  <img class="w-32 h-32 flex-shrink-0 mx-auto bg-black rounded-full" src="{{ $product->imageUrl() }}" alt="">
  <h3 class="mt-6 text-gray-900 text-sm leading-5 font-medium">{{ $product->name }}</h3>
  <dl class="mt-1 flex-grow flex flex-col justify-between">
	<dt class="sr-only">Title</dt>
	<dd class="text-gray-500 text-sm leading-5">Max. {{ $product->max_count }} Stück / Tag</dd>
	<dt class="sr-only">Role</dt>
	<dd class="mt-3">
	  <span class="px-2 py-1 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full">{{ $product->price }} &euro;</span>
	</dd>
  </dl>
</div>
<div class="border-t border-gray-200">
  <div class="-mt-px flex">
	<div class="w-0 flex-1 flex border-r border-gray-200">
	  <a href="{{ route('product.edit', $product) }}" class="relative -mr-px flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
		<span class="ml-0">Bearbeiten</span>
	  </a>
	</div>

	<div class="w-0 flex-1 flex justify-center border-r border-gray-200">
	  <form action="{{ route('product.delete', $product) }}" method="post">
	  @csrf
		<button type="submit" class="relative -mr-px flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
			Löschen
		</button>
	  </form>
	</div>

  </div>
</div>
</li>
