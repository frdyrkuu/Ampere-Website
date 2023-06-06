@extends('layouts.homepage')

@section('content')
    {{-- ADD CONTENT HERE FOR USER HOMEPAGE --}}
    <section>
        <h1 class="text-orange-500 font-extrabold text-4xl pt-4 px-4 sm:px-8">Let's Convert Now</h1>
        <div class="p-10 flex overflow-x-auto hide-scrollbar space-x-6 w-screen">
            {{-- CARD 1 --}}
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5">
                {{-- LINK 1 --}}
                <a href="/amperetrip">
                    <div
                        class="flex flex-col justify-between bg-white rounded-lg overflow-hidden shadow-md h-[250px] w-[150px] sm:w-full sm:h-full transition duration-500 hover:scale-110">
                        <img class="w-58 my-2 mx-auto" src="image/ampere-trip.png" alt="Ampere Trip">
                        <div class="p-4">
                            <h3 class="text-orange-500 text-sm sm:text-xl font-bold mb-2 text-center">Ampere Trip</h3>
                        </div>
                    </div>
                </a>
            </div>

            {{-- CARD 2 --}}
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5 ">
                {{-- LINK 2 --}}
                <a href="/ampacity-of-conductors">
                    <div
                        class="flex flex-col justify-between bg-white rounded-lg overflow-hidden shadow-md h-[250px] w-[150px] sm:w-full sm:h-full transition duration-500 hover:scale-110">
                        <img class="w-58 my-2 mx-auto" src="image/ampacity-conductors.png" alt="Ampacity of Conductors">
                        <div class="p-4">
                            <h3 class="text-orange-500 text-sm sm:text-xl font-bold mb-2 text-center">Ampacity of Conductors
                            </h3>
                        </div>
                    </div>
                </a>
            </div>

            {{-- CARD 3 --}}
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5">
                {{-- LINK 3 --}}
                <a href="/percentage-of-voltage">
                    <div
                        class="flex flex-col justify-between bg-white rounded-lg overflow-hidden shadow-md h-[250px] w-[150px] sm:w-full sm:h-full transition duration-500 hover:scale-110">
                        <img class="w-58 my-2 mx-auto" src="image/voltage-drop.png" alt="Percentage of Voltage Drop">
                        <div class="p-4">
                            <h3 class="text-orange-500 text-sm sm:text-xl font-bold mb-2 text-center">Percentage of Voltage
                                Drop
                            </h3>
                        </div>
                    </div>
                </a>
            </div>

            {{-- CARD 4 --}}
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5">
                {{-- LINK 4 --}}
                <a href="/power-quality">
                    <div
                        class="flex flex-col justify-between bg-white rounded-lg overflow-hidden shadow-md h-[250px] w-[150px] sm:w-full sm:h-full transition duration-500 hover:scale-110">
                        <img class="w-58 my-2 mx-auto" src="image/power-quality.png" alt="Power Factor/Power Quality">
                        <div class="p-4">
                            <h3 class="text-orange-500 text-sm sm:text-xl font-bold mb-2 text-center">Power Quality</h3>
                        </div>
                    </div>
                </a>
            </div>

            {{-- CARD 5 --}}
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5">
                {{-- LINK 5 --}}
                <a href="/energy-conservation">
                    <div
                        class="flex flex-col justify-between bg-white rounded-lg overflow-hidden shadow-md h-[250px] w-[150px] sm:w-full sm:h-full transition duration-500 hover:scale-110">
                        <img class="w-58 my-2 mx-auto" src="image/energy-saving.png" alt="Energy Efficiency">
                        <div class="p-4">
                            <h3 class="text-orange-500 text-sm sm:text-xl font-bold mb-2 text-center">Energy Conservation</h3>
                        </div>
                    </div>
                </a>
            </div>

    </section>
@endsection
