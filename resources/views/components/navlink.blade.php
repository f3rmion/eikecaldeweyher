@props([
    'route',
    'title'
])

<a
  href="{{ route($route) }}"
  class="ml-8 inline-flex items-center px-1 pt-1 @if(Route::currentRouteName() == $route) border-b-2 border-indigo-500 text-gray-900 @endif text-sm font-medium leading-5 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
  {{ $title }}
</a>
