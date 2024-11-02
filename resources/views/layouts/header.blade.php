<!-- resources/views/layouts/header.blade.php -->
<header class="bg-white shadow dark:bg-gray-800">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Company Logo -->
        <div class="flex items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="Company Logo" class="h-8 w-auto block dark:hidden">
            <img src="{{ asset('images/logo-dark.svg') }}" alt="Company Logo" class="h-8 w-auto hidden dark:block">
        </div>
        <!-- Login Button, Dark Mode Toggle, Language Selector, and Hamburger Menu -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('login') }}"
                class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-500">{{ __('messages.login') }}</a>
            <button onclick="toggleDarkMode()"
                class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 dark:text-gray-300 dark:hover:text-gray-500">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m8.66-8.66h-1M4.34 12H3m15.66 4.66l-.71-.71M6.05 6.05l-.71-.71m12.02 12.02l-.71-.71M6.05 17.95l-.71-.71M12 5a7 7 0 100 14 7 7 0 000-14z">
                    </path>
                </svg>
            </button>
            <div class="relative">
                <button id="language-selector"
                    class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white px-4 py-2 flex items-center">
                    <span class="flag-icon flag-icon-th mr-2"></span>
                    <span class="hidden sm:inline">{{ __('messages.thai') }}</span>
                </button>
                <div id="language-options"
                    class="absolute hidden mt-2 w-48 bg-white dark:bg-gray-700 rounded-md shadow-lg z-10">
                    <a href="{{ route('setLocale', 'th') }}"
                        class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 flex items-center">
                        <span class="flag-icon flag-icon-th mr-2"></span>
                        <span>{{ __('messages.thai') }}</span>
                    </a>
                    <a href="{{ route('setLocale', 'en') }}"
                        class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 flex items-center">
                        <span class="flag-icon flag-icon-us mr-2"></span>
                        <span>{{ __('messages.english') }}</span>
                    </a>
                    <a href="{{ route('setLocale', 'zh') }}"
                        class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 flex items-center">
                        <span class="flag-icon flag-icon-cn mr-2"></span>
                        <span>{{ __('messages.chinese') }}</span>
                    </a>
                </div>
            </div>
            <button
                class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 dark:text-gray-300 dark:hover:text-gray-500">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</header>

<script>
    document.getElementById('language-selector').addEventListener('click', function() {
        document.getElementById('language-options').classList.toggle('hidden');
    });
</script>
