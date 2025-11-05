@extends('layouts.app')

@section('title', 'Login')
@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Login
    </h2>
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf
        <!--
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" name="email" type="email" required autofocus
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('email') border-red-500 @enderror"
                   value="{{ old('email') }}">
            @error('email')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" name="password" type="password" required
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('password') border-red-500 @enderror">
            @error('password')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>
        -->

        <x-input label="Email" name="email" type="text" placeholder="email@test.com"/>
        <x-input label="Password" name="password" type="password" placeholder=""/>

            <x-button type="submit"  >
                Login
            </x-button>

    </form>

</div>
@endsection
