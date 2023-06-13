<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/style.css">

</head>

<body class="font-['Poppins'] flex flex-col min-h-[100vh]">


    {{-- HEADER  --}}
    <header class="sticky top-0 z-10">
        <div class="bg-white rounded-2xl shadow">
            <div class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8">
                <div class="flex justify-between h-24">
                    <div class="flex">
                        <a href="/" class="flex-shrink-0 flex items-center">
                            <img class="h-14 w-14 rounded-full" src="image/icon.png" alt="ACS-LOGO">
                            <span class="text-orange-500 text-2xl ml-2 font-extrabold">ACS PRO-TECH</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center">
                        <a href="#"
                            class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md font-medium">About</a>
                        <a href="#"
                            class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md  font-medium">Contact</a>
                        @guest
                            @if (Route::has('login'))
                            @endif

                            @if (Route::has('register'))
                            @endif
                        @else
                            <p class="text-gray-700 text-sm mr-4">|</p>

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-black" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        @endguest

                    </div>

                    <button onclick="hamburger()" class="text-3xl md:hidden cursor-pointer text-black font-extrabold">
                        ☰
                    </button>
                </div>
            </div>
        </div>
    </header>
    {{-- END HEADER --}}


    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-orange-500 rounded-t-2xl shadow-xl mt-auto">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0">
                    <img src="/image/icon.png" class="h-8 w-8 mr-3" alt="ACS-PROTECH Logos" />
                    <span class="self-center text-white  text-2xl font-bold whitespace-nowrap">ACS PRO-TECH</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-100 sm:mb-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-50 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-gray-100 sm:text-center">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">ACS PRO-TECH™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
