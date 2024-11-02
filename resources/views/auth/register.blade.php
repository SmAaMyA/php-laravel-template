<!-- resources/views/auth/register.blade.php -->
@extends('layouts.app')

@section('title', __('messages.register'))

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg dark:bg-gray-800 dark:text-white">
        <h1 class="text-2xl font-bold mb-5 text-center">{{ __('messages.register') }}</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.password') }}</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.confirm_password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 dark:bg-blue-700 dark:hover:bg-blue-800">{{ __('messages.register') }}</button>
            </div>
        </form>
    </div>
@endsection
