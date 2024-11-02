<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('messages.my_application'))</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans dark:bg-gray-900 dark:text-white">
    @include('layouts.header')

    <div class="container mx-auto">
        @yield('content')
    </div>

    <script>
        // Toggle dark mode
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }
    </script>
</body>

</html>
