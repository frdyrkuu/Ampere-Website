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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body class="font-['Poppins']">


    {{-- HEADER  --}}
    <header class="sticky top-0 z-10">
        <div class="bg-white rounded-2xl shadow">
            <div class="mx-auto px-8 sm:px-6 lg:px-8">
                <div class="flex justify-between h-24">
                    <div class="flex">
                        <a href="/home" class="flex-shrink-0 flex items-center">
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

                    <button onclick="hamburger()" class="text-3xl md:hidden cursor-pointer text-black font-extrabold">
                        ☰
                    </button>
                </div>
            </div>
        </div>
    </header>
    {{-- END HEADER --}}


    <main class="">
        @yield('content')
    </main>
</body>

</html>
