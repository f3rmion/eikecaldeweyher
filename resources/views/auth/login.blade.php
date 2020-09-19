@extends('layouts.app')

@section('content')
<div class="container mx-auto">
<form method="POST" action="{{ route('login') }}">
@csrf
    <x-input.form-2column title="Login" description="Enter your credentials">

      <div class="grid grid-cols-6 gap-6">

        <x-input.text
          class="col-span-6 md:col-span-4"
          name="email"
          title="E-Mail address"
        />

        <x-input.text
          class="col-span-6 md:col-span-4"
          name="password"
          title="Password"
          type="password"
        />

        <div class="col-span-6">
            <span class="inline-flex rounded-md shadow-sm">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                  Login
              </button>
            </span>

            @if (Route::has('password.request'))
            <a class="ml-2 text-sm" href="{{ route('password.request') }}">
                Forgot password?
            </a>
            @endif
        </div>

      </div>

    </x-input.form-2column>
</form>
</div>
@endsection
