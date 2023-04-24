<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/style.css">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased font-['Poppins']">

    {{-- HEADER  --}}
    <header class="sticky top-0 z-50">
        <div class="bg-blue-700 rounded-2xl shadow-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-24">
                    <div class="flex">
                        <a href="#" class="flex-shrink-0 flex items-center">
                            <img class="h-20 w-22 bg-blue-500 rounded-full" src="image/logo.png"
                                alt="Workflow logo">
                            <span class="text-white text-xl ml-2 font-medium">Safe Currents</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center">

                        <a href="#" class="text-white hover:text-white px-3 py-2 rounded-md font-medium">About</a>
                        <a href="#"
                            class="text-white hover:text-white px-3 py-2 rounded-md  font-medium">Contact</a>

                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="inline-block px-6 py-3 leading-none rounded-lg text-white bg-blue-500 hover:bg-blue-800">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="inline-block px-6 py-3 leading-none font-semibold text-white rounded-lg bg-blue-500 hover:bg-blue-800 mx-2">Log
                                    in</a>

                                <p class="text-white text-sm">|</p>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="inline-block px-6 py-3 leading-none rounded-xl text-white border hover:bg-blue-700 mx-2">Sign
                                        Up</a>
                                @endif
                            @endauth
                        @endif

                    </div>

                    <button onclick="hamburger()" class="text-3xl md:hidden cursor-pointer text-white">
                        ☰
                    </button>


                </div>
            </div>
        </div>
    </header>
    {{-- END HEADER --}}

    <main class="max-w-7xl mx-auto">

        {{-- LANDING PAGE --}}
        <section class="flex flex-col justify-center md:flex-row p-6 items-center gap-4 mt-10">

            <article class="md:w-3/4">
                <h2
                    class="text-6xl font-extrabold text-center sm:text-left sm:text-6xl text-blue-500 animate-reveal-x">
                    Welcome to <span class="text-blue-900">Safe Current.</span>
                </h2>
                <br>
                <h2 class="text-4xl font-semibold sm:text-4xl text-blue-500 text-center sm:text-left animate-reveal">
                    The <span class="text-yellow-800 font-normal">Ultimate Guide
                    </span>
                    to Ampere Conversion for Electrical Safety.
                </h2>
                <h3
                    class="font-['Poppins'] text-1xl font-thin sm:text-2xl text-gray-600 text-center sm:text-left animate-reveal-x">
                    <br>
                    "Electricity is a powerful tool, but it can also be dangerous. Safe currents are the key to ensuring
                    that electricity is used safely and responsibly, protecting both people and property from harm."
                </h3>
                <br>


            </article>
            <div class="w-full sm:w-5/4 transition duration-500 hover:scale-110">
                <img class="animate-floating w-11/12 m-auto sm:m-none object-cover"
                    src="https://www.generatorsource.com/getattachment/Articles/Generator-Info/How-to-Choose-a-Circuit-Breaker/Circuit-Breakers.jpg.aspx?lang=en-US"
                    alt="burger">
            </div>
        </section>
        {{-- END LANDING PAGE --}}



    </main>



</body>

</html>
