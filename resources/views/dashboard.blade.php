<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', __('messages.dashboard'))

@section('content')
    <div class="container mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg dark:bg-gray-800 dark:text-white">
        <h1 class="text-2xl font-bold mb-5 text-center">{{ __('messages.dashboard') }}</h1>
        <p class="text-center">{{ __('messages.dashboard_welcome') }}</p>
    </div>
@endsection
