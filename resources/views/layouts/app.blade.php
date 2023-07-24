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
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}"></script>

    <link rel="stylesheet" href="/style.css">

</head>

<body class="font-['Poppins'] flex flex-col min-h-[100vh]">


    {{-- HEADER  --}}
    <header class="sticky top-0 z-10">
        <section>
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
                            <a href="/#about"
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

                                <div class="relative inline-block">
                                    <button
                                        class="bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center"
                                        onclick="toggleDropdown()">
                                        <span> {{ Auth::user()->name }}</span>
                                        <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path d="M6 8l4 4 4-4z"></path>
                                        </svg>
                                    </button>
                                    <div
                                        class="absolute hidden bg-white text-gray-700 rounded-xl border-gray-500 mt-2 px-4 shadow-md w-full text-center">
                                        <a href="/home" class="block px-4 py-2 hover:bg-gray-200"> <i
                                                class="fa fa-home py-auto" aria-hidden="true"></i>
                                            Home</a>
                                        <a href="/chart" class="block px-4 py-2 hover:bg-gray-200"><i
                                                class="fa fa-line-chart py-auto" aria-hidden="true"></i>
                                            Chart</a>
                                        <a href="" class="block px-4 py-2 hover:bg-gray-200"><i
                                                class="fa fa-gear py-auto" aria-hidden="true"></i>
                                            Settings</a>

                                        <br>
                                        <hr class="">

                                        <a href="{{ route('logout') }}"
                                            class="block px-4 py-2 text-red-500 hover:bg-gray-200"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out py-auto" aria-hidden="true"></i>
                                            {{ __('Logout') }}</a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>

                                <script>
                                    function toggleDropdown() {
                                        var dropdownMenu = document.querySelector('.absolute');
                                        dropdownMenu.classList.toggle('hidden');
                                    }
                                </script>

                            @endguest

                        </div>

                        <button onclick="showHamburger()"
                            class="text-3xl md:hidden cursor-pointer text-black font-extrabold">
                            ☰
                        </button>
                    </div>
                </div>
            </div>
        </section>


        {{-- HAMBURGE SHOW --}}
        <section id="hamburger"
            class="bg-white w-1/2 text-center right-1 rounded-2xl shadow-md shadow-bottom-2xl border border-gray-300 -mt-5 absolute hidden lg:hidden">
            <nav>
                <div class="">
                    <div class="text-gray-700 px-2 pt-4 pb-3 space-y-1 sm:px-3">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">Register</a>
                                @endif
                            @endauth
                        @endif

                        <a href="#"
                            class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">Contact</a>
                        <a href="/#about"
                            class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">About
                            Us</a>

                        </a>
                    </div>
                </div>
            </nav>
        </section>
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


    <script src="{{ asset('/js/hamburger.js') }}"></script>
</body>

</html>
