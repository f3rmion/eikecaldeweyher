<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>eike:caldeweyher</title>
	<!-- Tailwind CSS --!>
	<link rel="stylesheet" href="/css/main.css">
	<!-- Tailwind UI --!>
	<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}">

	@livewireStyles
	@trixassets
</head>

<body class="bg-white text-gray-700">
	<header class="border-b border-gray-600"> 
		<nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
			<div class="flex flex-col lg:flex-row items-center">
				<a href="/">
					<div class="w-20 lg:w-12 text-gray-600 text-xl tracking-wide font-semibold flex-none">
						<img src="/logo.png">
					</div>
				</a>	
				<ul class="flex text-gray-600 ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
					<li><a href="https://theprototypers.de/">Hire</a></li>
					<li><a href="{{ route('research.index') }}">R&D</a></li>
					<li><a href="{{ route('imprint') }}">Imprint</a></li>
					<li>
					@if (Auth::guest())
						<a href="{{ route('login') }}">Login</a>
					@else
						<form action="{{ route('logout') }}" method="post">
							@csrf
							<button>Logout</button>
						</form>	
					@endif	
					</li>					
				</ul>
				@includeWhen(Auth::user(), 'layouts._admin_menu')
			</div>
		</nav>
	</header>

	<main class="py-8">
		@if(session('status'))
		<div class="max-w-7xl mx-auto px-4 mb-4">
			<div class="rounded-md bg-blue-50 p-4 shadow">
			  <div class="flex">
				<div class="flex-shrink-0">
				  <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
				  </svg>
				</div>
				<div class="ml-3 flex-1 md:flex md:justify-between">
				  <p class="text-sm leading-5 text-blue-700">
					{{ session('status') }}
				  </p>
				</div>
			  </div>
			</div>
		</div>
		@endif
		@yield('content')
	</main>

	<footer>
	<div class="bg-white">
	  <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
		<div class="flex justify-center md:order-2">
		  <a href="https://twitter.com/ECaldeweyher" class="ml-6 text-indigo-500 hover:text-indigo-600">
			<span class="sr-only">Twitter</span>
			<svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
			  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
			</svg>
		  </a>
		  <a href="https://github.com/f3rmion" class="ml-6 text-indigo-500 hover:text-indigo-600 text-base">
			<span class="sr-only">GitHub</span>
			<svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
			  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
			</svg>
		  </a>
		</div>
		<div class="mt-8 md:mt-0 md:order-1">
		  <p class="text-center text-base leading-6 text-gray-500">
			&copy; 2020 All rights reserved.
		  </p>
		</div>
	  </div>
	</div>
	</footer>

@livewireScripts
</body>
</html>
