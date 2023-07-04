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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<body class="font-['Poppins'] hide-scrollbar flex flex-col min-h-[100vh] h-screen">
    {{-- HEADER  --}}
    <header class="sticky top-0 z-10">
        <section>
            <div class="bg-white rounded-2xl shadow">
                <div class="mx-auto px-8 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-24">
                        <div class="flex">
                            <a href="/" class="flex-shrink-0 flex items-center">
                                <img class="h-14 w-14 rounded-full" src="/image/icon.png" alt="ACS-LOGO">
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
                                    <a class="dropdown-item text-black" href="/home">
                                        <i class="fa fa-home py-auto" aria-hidden="true"></i>
                                        Home
                                    </a>
                                    <a class="dropdown-item text-black mt-3" href="/chart">
                                        <i class="fa fa-line-chart py-auto" aria-hidden="true"></i>
                                        Chart
                                    </a>
                                    <a class="dropdown-item text-black mt-3" href="">
                                        <i class="fa fa-gear py-auto" aria-hidden="true"></i>
                                        Settings
                                    </a>
                                    <br>
                                    <hr class="">
                                    <a class="dropdown-item text-red-500 hover:text-red-500" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out py-auto" aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

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
                        @guest
                            @if (Route::has('login'))
                            @endif

                            @if (Route::has('register'))
                            @endif
                        @else
                            <a id="navbarDropdown"
                                class="nav-link dropdown-toggle block px-3 py-2 rounded-md text-base font-medium hover:bg-yellow-200 truncate"
                                href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-black" href="/home">
                                    <i class="fa fa-home py-auto" aria-hidden="true"></i>
                                    Home
                                </a>
                                <a class="dropdown-item text-black mt-3" href="/chart">
                                    <i class="fa fa-line-chart py-auto" aria-hidden="true"></i>
                                    Chart
                                </a>
                                <a class="dropdown-item text-black mt-3" href="">
                                    <i class="fa fa-gear py-auto" aria-hidden="true"></i>
                                    Settings
                                </a>
                                <br>
                                <hr class="">
                                <a class="dropdown-item text-red-500 hover:text-red-500" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out py-auto" aria-hidden="true"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                        <a href="/"
                            class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">Home</a>
                        <a href="#"
                            class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">Contact</a>
                        <a href="#"
                            class="block px-3 py-4 rounded-md text-base font-medium hover:bg-yellow-200">About
                            Us</a>

                        </a>
                    </div>
                </div>
            </nav>
        </section>


    </header>
    {{-- END HEADER --}}


    <main>
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
