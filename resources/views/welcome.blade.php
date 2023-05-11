<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/style.css">

    <title>ACS PRO-TECH</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased font-['Poppins']">

    {{-- HEADER  --}}
    <header class="sticky top-0 z-50">
        <div class="bg-white shadow-xl rounded-2xl">
            <div class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8">
                <div class="flex justify-between h-24">
                    <div class="flex">
                        <a href="#" class="flex-shrink-0 flex items-center">
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

                    <button onclick="hamburger()" class="text-3xl md:hidden cursor-pointer text-black font-extrabold">
                        ☰
                    </button>


                </div>
            </div>
        </div>
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
                <h2 class="text-2xl
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
                    <a href="/login"
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



</body>

</html>
