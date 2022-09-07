<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>LINVER - Login System</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    {{-- CSS Style --}}
    <link rel="stylesheet" href="assets/admin-dashboard/css/tailwind.output.css" />

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="assets/admin-dashboard/js/init-alpine.js" defer></script>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="assets/admin-dashboard/img/create-account-office.jpeg" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="assets/admin-dashboard/img/create-account-office-dark.jpeg" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        {{-- Button Home --}}
                        <a class="inline-flex items-center block px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-teal-600 border border-transparent rounded-lg active:bg-teal-600 hover:bg-teal-700 focus:outline-none focus:shadow-outline-teal"
                            href="{{ url('/') }}">
                            <svg class="w-6 h-6 mr-2 -ml-1" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span>HOME</span>
                        </a>

                        <hr class="my-6" />

                        <h1 class="mb-4 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">
                            Register Admin Panel
                        </h1>

                        {{-- Form Register --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- Name --}}
                            <label for="name" class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">{{ __('Name') }}</span>
                                <input id="name" type="name" name="name"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input form-control @error('name') is-invalid @enderror"
                                    placeholder="Name" required autocomplete="name" autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>

                            {{-- Email Address --}}
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Email Address</span>
                                <input id="email" type="email" name="email"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input form-control @error('email') is-invalid @enderror"
                                    placeholder="example@email.com" required autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>

                            {{-- Password --}}
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Password</span>
                                <input id="password" type="password" name="password"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input form-control @error('password') is-invalid @enderror"
                                    placeholder="***************" required autocomplete="new-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>

                            {{-- Confirm Password --}}
                            <label class="block
                                mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Confirm password
                                </span>
                                <input id="password-confirm" type="password" name="password_confirmation"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input form-control"
                                    placeholder="***************" required autocomplete="new-password" />
                            </label>

                            <button type="submit"
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                {{ __('Register') }}
                            </button>
                        </form>

                        <hr class="my-8" />

                        <p class="mt-4">
                            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                href="{{ route('login') }}">
                                Already have an account? Login
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
