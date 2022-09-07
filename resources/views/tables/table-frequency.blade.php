<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>LINVER - Admin Panel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    {{-- CSS Style --}}
    <link rel="stylesheet" href="assets/admin-dashboard/css/tailwind.output.css" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="assets/admin-dashboard/js/init-alpine.js"></script>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-2xl font-bold text-gray-800 dark:text-gray-200 inline-flex items-center"
                    href="{{ url('/') }}">
                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path fill="none"
                            d="M17.685,5.808c-0.257,0-0.502,0.053-0.73,0.139C16.64,2.737,13.649,0.219,10,0.219c-3.649,0-6.64,2.518-6.955,5.728c-0.228-0.086-0.473-0.139-0.73-0.139c-1.153,0-2.096,0.943-2.096,2.096v3.493c0,1.153,0.943,2.096,2.096,2.096c0.28,0,0.547-0.058,0.792-0.158c0.113,1.088,0.304,1.795,0.585,2.254c0.539,0.834,4.139,4.192,6.288,4.192c2.149,0,5.751-3.361,6.272-4.167c0.292-0.476,0.488-1.196,0.602-2.296c0.255,0.112,0.536,0.175,0.831,0.175c1.153,0,2.096-0.943,2.096-2.096V7.904C19.781,6.751,18.838,5.808,17.685,5.808zM15.078,14.855c-0.482,0.746-3.715,3.529-5.099,3.529s-4.616-2.783-5.097-3.525c-0.319-0.521-0.444-1.919-0.489-3.297c0.004-0.055,0.017-0.108,0.017-0.164V8.603c0-0.04,0.005-0.078,0.006-0.118C4.779,8.56,5.156,8.603,5.545,8.603c1.994,0,3.706-1.037,4.455-2.519c0.749,1.482,2.461,2.519,4.455,2.519c0.389,0,0.766-0.043,1.128-0.118c0.001,0.039,0.006,0.078,0.006,0.118c0,0.077-0.008,0.152-0.012,0.229C15.598,10.276,15.641,13.938,15.078,14.855z">
                        </path>
                    </svg>
                    <span class="ml-2">LINVER</span>
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ url('/home') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    {{-- Charts Page --}}
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                                <span class="ml-4">Charts</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/voltage-chart') }}">Voltage</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/current-chart') }}">Current</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/power-chart') }}">Power</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/energy-chart') }}">Energy</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/frequency-chart') }}">Frequency</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/pf-chart') }}">Power Factor</a>
                                </li>
                            </ul>
                        </template>
                    </li>

                    {{-- Tables Page --}}
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="togglePagesMenu" aria-haspopup="true">
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                                aria-hidden="true"></span>
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                </svg>
                                <span class="ml-4">Tables</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/voltage-table') }}">Voltage</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <span
                                        class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                                        aria-hidden="true"></span>
                                    <a class="w-full" href="{{ url('/current-table') }}">Current</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/power-table') }}">Power</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/energy-table') }}">Energy</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/frequency-table') }}">Frequency</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/pf-table') }}">Power Factor</a>
                                </li>
                            </ul>
                        </template>
                    </li>

                    {{-- Profile Page --}}
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ url('/profile') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path fill="none"
                                    d="M17.685,5.808c-0.257,0-0.502,0.053-0.73,0.139C16.64,2.737,13.649,0.219,10,0.219c-3.649,0-6.64,2.518-6.955,5.728c-0.228-0.086-0.473-0.139-0.73-0.139c-1.153,0-2.096,0.943-2.096,2.096v3.493c0,1.153,0.943,2.096,2.096,2.096c0.28,0,0.547-0.058,0.792-0.158c0.113,1.088,0.304,1.795,0.585,2.254c0.539,0.834,4.139,4.192,6.288,4.192c2.149,0,5.751-3.361,6.272-4.167c0.292-0.476,0.488-1.196,0.602-2.296c0.255,0.112,0.536,0.175,0.831,0.175c1.153,0,2.096-0.943,2.096-2.096V7.904C19.781,6.751,18.838,5.808,17.685,5.808zM15.078,14.855c-0.482,0.746-3.715,3.529-5.099,3.529s-4.616-2.783-5.097-3.525c-0.319-0.521-0.444-1.919-0.489-3.297c0.004-0.055,0.017-0.108,0.017-0.164V8.603c0-0.04,0.005-0.078,0.006-0.118C4.779,8.56,5.156,8.603,5.545,8.603c1.994,0,3.706-1.037,4.455-2.519c0.749,1.482,2.461,2.519,4.455,2.519c0.389,0,0.766-0.043,1.128-0.118c0.001,0.039,0.006,0.078,0.006,0.118c0,0.077-0.008,0.152-0.012,0.229C15.598,10.276,15.641,13.938,15.078,14.855z">
                                </path>
                            </svg>
                            <span class="ml-4">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside
            class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
            @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-2xl font-bold text-gray-800 dark:text-gray-200 inline-flex items-center"
                    href="{{ url('/') }}">
                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path fill="none"
                            d="M17.685,5.808c-0.257,0-0.502,0.053-0.73,0.139C16.64,2.737,13.649,0.219,10,0.219c-3.649,0-6.64,2.518-6.955,5.728c-0.228-0.086-0.473-0.139-0.73-0.139c-1.153,0-2.096,0.943-2.096,2.096v3.493c0,1.153,0.943,2.096,2.096,2.096c0.28,0,0.547-0.058,0.792-0.158c0.113,1.088,0.304,1.795,0.585,2.254c0.539,0.834,4.139,4.192,6.288,4.192c2.149,0,5.751-3.361,6.272-4.167c0.292-0.476,0.488-1.196,0.602-2.296c0.255,0.112,0.536,0.175,0.831,0.175c1.153,0,2.096-0.943,2.096-2.096V7.904C19.781,6.751,18.838,5.808,17.685,5.808zM15.078,14.855c-0.482,0.746-3.715,3.529-5.099,3.529s-4.616-2.783-5.097-3.525c-0.319-0.521-0.444-1.919-0.489-3.297c0.004-0.055,0.017-0.108,0.017-0.164V8.603c0-0.04,0.005-0.078,0.006-0.118C4.779,8.56,5.156,8.603,5.545,8.603c1.994,0,3.706-1.037,4.455-2.519c0.749,1.482,2.461,2.519,4.455,2.519c0.389,0,0.766-0.043,1.128-0.118c0.001,0.039,0.006,0.078,0.006,0.118c0,0.077-0.008,0.152-0.012,0.229C15.598,10.276,15.641,13.938,15.078,14.855z">
                        </path>
                    </svg>
                    <span class="ml-2">LINVER</span>
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ url('/home') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    {{-- Charts Page --}}
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                                <span class="ml-4">Charts</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/voltage-chart') }}">Voltage</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/current-chart') }}">Current</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/power-chart') }}">Power</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/energy-chart') }}">Energy</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/frequency-chart') }}">Frequency</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/pf-chart') }}">Power Factor</a>
                                </li>
                            </ul>
                        </template>
                    </li>

                    {{-- Tables Page --}}
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                </svg>
                                <span class="ml-4">Tables</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/voltage-table') }}">Voltage</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/current-table') }}">Current</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/power-table') }}">Power</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/energy-table') }}">Energy</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/frequency-table') }}">Frequency</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="{{ url('/pf-table') }}">Power Factor</a>
                                </li>
                            </ul>
                        </template>
                    </li>

                    {{-- Profile Page --}}
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ url('/profile') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path fill="none"
                                    d="M17.685,5.808c-0.257,0-0.502,0.053-0.73,0.139C16.64,2.737,13.649,0.219,10,0.219c-3.649,0-6.64,2.518-6.955,5.728c-0.228-0.086-0.473-0.139-0.73-0.139c-1.153,0-2.096,0.943-2.096,2.096v3.493c0,1.153,0.943,2.096,2.096,2.096c0.28,0,0.547-0.058,0.792-0.158c0.113,1.088,0.304,1.795,0.585,2.254c0.539,0.834,4.139,4.192,6.288,4.192c2.149,0,5.751-3.361,6.272-4.167c0.292-0.476,0.488-1.196,0.602-2.296c0.255,0.112,0.536,0.175,0.831,0.175c1.153,0,2.096-0.943,2.096-2.096V7.904C19.781,6.751,18.838,5.808,17.685,5.808zM15.078,14.855c-0.482,0.746-3.715,3.529-5.099,3.529s-4.616-2.783-5.097-3.525c-0.319-0.521-0.444-1.919-0.489-3.297c0.004-0.055,0.017-0.108,0.017-0.164V8.603c0-0.04,0.005-0.078,0.006-0.118C4.779,8.56,5.156,8.603,5.545,8.603c1.994,0,3.706-1.037,4.455-2.519c0.749,1.482,2.461,2.519,4.455,2.519c0.389,0,0.766-0.043,1.128-0.118c0.001,0.039,0.006,0.078,0.006,0.118c0,0.077-0.008,0.152-0.012,0.229C15.598,10.276,15.641,13.938,15.078,14.855z">
                                </path>
                            </svg>
                            <span class="ml-4">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="flex flex-col flex-1">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                        @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32"></div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple"
                                @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                        </path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>

                        <!-- Profile menu -->
                        <li class="relative">
                            <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                                @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                                aria-haspopup="true">
                                <img class="object-cover w-8 h-8 rounded-full"
                                    src="assets/admin-dashboard/img/profile-01.jpg" alt="profile-image"
                                    aria-hidden="true" />
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                                    aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                            <span>Log out</span>
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                </div>
            </header>
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Frequency Value Table
                    </h2>
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">ID</th>
                                        <th class="px-4 py-3">Frequency Value</th>
                                        <th class="px-4 py-3">Created at</th>
                                        <th class="px-4 py-3">Updated at</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    @if ($frequency->count())
                                        @foreach ($frequency as $key => $nilaifrekuensi)
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="px-4 py-3 text-sm">{{ $frequency->firstItem() + $key }}
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    {{ number_format($nilaifrekuensi->frequency_value, 2) }}
                                                </td>
                                                </td>
                                                <td class="px-4 py-3 text-sm">{{ $nilaifrekuensi->created_at }}</td>
                                                <td class="px-4 py-3 text-sm">{{ $nilaifrekuensi->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                            Showing
                            {{ $frequency->firstItem() }}
                            to
                            {{ $frequency->lastItem() }}
                            of
                            {{ $frequency->total() }}
                            entries.
                        </div>
                        <div>{{ $frequency->links() }}</div>
                    </div>
                    <div>
                        <button
                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            <a href="/frequency/export_excel">
                                <span>EXPORT EXCEL</span>
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
