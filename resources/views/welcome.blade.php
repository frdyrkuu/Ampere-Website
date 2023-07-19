<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

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

                            <a href="#about"
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
                        <a href="#about"
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
            class="mx-auto max-w-7xl flex flex-col-reverse justify-center md:flex-row p-6 items-center gap-4 h-screen sm:-mt-20 mt-32  mb-20">

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
                    to Data Interpretation for Electrical Safety.
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

        <hr class="border-4 border-orange-500 max-w-7xl mx-auto mb-20 w-3/4 sm:w-1/2"/>

        {{-- ABOUT US SECTION  --}}

        <section class="max-w-7xl mx-auto mb-20" id="about">
            <h1 class="text-orange-500 text-xl text-center font-semibold p-2">About Us</h1>
            <h2 class="text-center text-gray-700 font-bold text-4xl">What we do</h2>
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="md:w-2/3 lg:w-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-secondary text-orange-500">
                        <path fill-rule="evenodd"
                            d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <h2 class="my-8 text-2xl font-bold text-gray-700 md:text-4xl">
                        Welcome to <span class="text-orange-500">ACS PRO-TECH</span>, your <span
                            class="text-yellow-400">ultimate guide</span> to data interpretation.
                    </h2>
                    <p class="text-gray-600">We are dedicated to providing comprehensive information
                        and resources to help individuals and professionals understand and navigate the complex world of
                        electrical safety.
                        <br>
                        <br>
                        At ACS PRO-TECH, our mission is to empower you with the knowledge and tools needed to ensure the
                        highest level of safety when working with electrical systems. We understand the critical
                        importance of electrical safety in various industries and strive to be your go-to resource for
                        reliable and up-to-date information.
                    </p>
                </div>
                <div
                    class="mt-16 grid divide-x divide-y divide-gray-100 overflow-hidden rounded-3xl border border-gray-100 text-gray-600  sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                    <div
                        class="group relative bg-white transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png" class="w-12"
                                width="512" height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-orange-500 transition group-hover:text-secondary">
                                    Comprehensive Guides
                                </h5>
                                <p class="text-gray-600">
                                    We provide in-depth guides that cover a wide range of topics related to data
                                    interpretation for electrical safety.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div
                        class="group relative bg-white transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341134.png" class="w-12"
                                width="512" height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-orange-500 transition group-hover:text-secondary">
                                    Best Practices
                                </h5>
                                <p class="text-gray-600">
                                    We share best practices and industry recommendations to help you implement effective
                                    safety measures in your electrical work.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div
                        class="group relative bg-white transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341160.png" class="w-12"
                                width="512" height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-orange-500 transition group-hover:text-secondary">
                                    Educational Resources
                                </h5>
                                <p class="text-gray-600">
                                    Our aim is to demystify electrical safety and help you develop a solid understanding
                                    of data interpretation techniques.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div
                        class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div
                            class="relative space-y-8 py-12 p-8 transition duration-300 group-hover:bg-white">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12"
                                width="512" height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-orange-500 transition group-hover:text-secondary">
                                    More features
                                </h5>
                                <p class="text-gray-600">
                                    Explore our website, delve into our guides, and join our community as we embark on
                                    this journey to enhance electrical safety through data interpretation.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="border-4 border-orange-500 max-w-7xl mx-auto mb-20 w-3/4 sm:w-1/2"/>

        {{-- OUR TEAM SECTION --}}

        <section class="">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Our Team</h2>
                    <p class="font-light text-gray-500 lg:mb-16 sm:text-xl">Our team at <span
                            class="text-orange-500 font-semibold">ACS PRO-TECH</span>
                        is a dedicated group of experts passionate about promoting electrical safety through data
                        interpretation.</p>
                </div>

                {{-- FIRST PERSON --}}
                <div class="flex flex-wrap mx-auto items-center justify-center gap-10">
                    <div class="w-1/2 sm:w-1/2 md:w-1/4 px-2">
                        <img src="/image/member4.png" alt="" class="w-full">
                        <div class="text-center mt-2">
                            <h1 class="text-white relative inline-block px-4 py-2 rounded-lg bg-orange-500">Shane
                                Benedict D. Barbosa</h1>
                        </div>
                    </div>

                    <div class="w-1/2 sm:w-1/2 md:w-1/4 px-2">
                        <img src="/image/member1.png" alt="" class="w-full">
                        <div class="text-center mt-2">
                            <h1 class="text-white relative inline-block px-4 py-2 rounded-lg bg-orange-500">
                                Greyzian Joshua S. Pruna</h1>
                        </div>
                    </div>

                    <div class="w-1/2 sm:w-1/2 md:w-1/4 px-2">
                        <img src="/image/member5.png" alt="" class="w-full">
                        <div class="text-center mt-2">
                            <h1 class="text-white relative inline-block px-4 py-2 rounded-lg bg-orange-500">Joyce Ann
                                A. Veranga</h1>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mx-auto items-center justify-center gap-10 mt-10">
                    <div class="w-1/2 sm:w-1/2 md:w-1/4 px-2">
                        <img src="/image/member2.png" alt="" class="w-full">
                        <div class="text-center mt-2">
                            <h1 class="text-white relative inline-block px-4 py-2 rounded-lg bg-orange-500">Katlen M.
                                Loñosa</h1>
                        </div>
                    </div>

                    <div class="w-1/2 sm:w-1/2 md:w-1/4 px-2">
                        <img src="/image/member3.png" alt="" class="w-full">
                        <div class="text-center mt-2">
                            <h1 class="text-white relative inline-block px-4 py-2 rounded-lg bg-orange-500">Louis
                                Antonio R. Reyes</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    {{-- Footer --}}
    <footer class="bg-orange-500 rounded-t-2xl shadow-xl mt-20">
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
