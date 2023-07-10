<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/style.css">
    <title>ACS PRO-TECH</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ mix('build/assets/app.js') }}"></script>

</head>

<body class="antialiased font-['Poppins'] flex flex-col min-h-[100vh]">

    {{-- HEADER  --}}
    <header class="sticky top-0 z-50">
        <section>
            <div class="bg-white shadow-xl rounded-2xl">
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

                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}"
                                        class="inline-block bg-orange-500 p-2 rounded-xl text-white font-semibold shadow-xl transition duration-500 hover:scale-110 px-6 mx-4 border-b-4 border-orange-700">Home</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="inline-block bg-orange-500 p-2 rounded-xl text-white font-semibold shadow-xl transition duration-500 hover:scale-110 px-6 mx-4 border-b-4 border-orange-700">Log
                                        in</a>

                                    <p class="text-gray-700 text-sm">|</p>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="inline-block bg-yellow-400 p-2 rounded-xl text-white font-semibold shadow-xl transition duration-500 hover:scale-110 px-6 mx-4 border-b-4 border border-yellow-600">Sign
                                            Up</a>
                                    @endif
                                @endauth
                            @endif
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

        {{-- LANDING PAGE --}}
        <section
            class="mx-auto max-w-7xl flex flex-col-reverse justify-center md:flex-row p-6 items-center gap-4 sm:mt-20 mt-10">

            <article class="ml-0 lg:ml-20 md:w-full">
                <h2 class="text-orange-500 p-2 text-6xl font-extrabold text-center md:text-left sm:text-8xl">
                    ACS PRO-TECH
                </h2>
                <br>
                <h2
                    class="text-2xl
                    font-semibold sm:text-4xl text-black text-center md:text-left animate-reveal">
                    The <span class="text-yellow-400 font-semibold">Ultimate Guide
                    </span>
                    to Ampere Conversion for Electrical Safety.
                </h2>
                <h3
                    class="font-['Poppins'] text-xl font-thin sm:text-2xl text-gray-600 text-center md:text-left animate-reveal-x">
                    <br>
                    "Electricity is a powerful tool, but it can also be dangerous. Safe currents are the key to ensuring
                    that electricity is used safely and responsibly, protecting both people and property from harm."
                </h3>
                <br>

                <div class="flex justify-center md:justify-start">
                    <a href="/welcome/guest"
                        class="bg-orange-500 p-2  rounded-xl text-white font-semibold shadow-xl transition duration-500 hover:scale-110 px-6 mx-4 border-b-4 border border-orange-700">Let's
                        Get Started</a>
                </div>

            </article>
            <div class="w-3/4 sm:w-6/12 animate-reveal">
                <img class="w-11/12 m-auto sm:m-none object-cover animate-floating" src="image/picture.png"
                    alt="burger">
            </div>

        </section>
        {{-- END LANDING PAGE --}}
    </main>

    {{-- Footer --}}
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
            <span class="block text-sm text-gray-100 sm:text-center">© 2023 <a href=""
                    class="hover:underline">ACS PRO-TECH™</a>. All Rights Reserved.</span>
        </div>
    </footer>


    <script src="{{ asset('/js/hamburger.js') }}"></script>
</body>

</html>
