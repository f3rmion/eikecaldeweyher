<ul class="flex text-gray-600 ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
    <li><a href="{{ url('home') }}">Home</a></li>
    <li><a href="{{ url('posts') }}">Posts</a></li>
    <li><a href="{{ url('categories') }}">Categories</a></li>
    <li><a href="{{ url('tags') }}">Tags</a></li>

    @if (Auth::user()->is_admin)
        <li><a href="{{ url('users') }}">Users</a></li>
    @endif
</ul>
