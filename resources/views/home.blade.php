@extends('layouts.homepage')

@section('content')
    {{-- ADD CONTENT HERE FOR USER HOMEPAGE --}}
    <section>
        <h1 class="text-orange-500 font-extrabold text-4xl pt-4 px-4 sm:px-8">Let's Convert Now</h1>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
            <!--Card 1-->
            <div class="bg-white rounded overflow-hidden shadow">
                <img class="w-58 mx-auto" src="image/ampere-trip.png" alt="Ampere Trip">
                <div class="px-6 py-4">
                    <div class="text-orange-500 font-bold text-xl mb-2">Ampere Trip</div>
                    <p class="text-gray-700 text-base">
                        Unleashing Ampere trip's conversion, a journey ablaze with electrifying energy, paving the way for
                        innovation and illuminating new possibilities with its power-packed transformation.</p>

                    <div class="mt-5">
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-yellow-300 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                            <i class="fa-solid fa fa-repeat mr-2" style="color: #ffffff;"></i>
                            Convert Now
                        </a>
                    </div>
                </div>
            </div>
            <!--Card 2-->
            <div class="bg-white rounded overflow-hidden shadow">
                <img class="w-58 mx-auto" src="image/ampacity-conductors.png" alt="Ampacity Conductors">
                <div class="px-6 py-4">
                    <div class="text-orange-500 font-bold text-xl mb-2">Ampacity of Conductors</div>
                    <p class="text-gray-700 text-base">
                        The ampacity of conductors determines their maximum current-carrying capacity, ensuring safe and
                        efficient electrical transmission and minimizing the risk of overheating.
                    </p>

                    <div class="mt-5">
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-yellow-300 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                            <i class="fa-solid fa fa-repeat mr-2" style="color: #ffffff;"></i>
                            Convert Now
                        </a>
                    </div>
                </div>
            </div>

            <!--Card 3-->
            <div class="bg-white rounded overflow-hidden shadow">
                <img class="w-58 mx-auto" src="image/voltage-drop.png" alt="Voltage Drop">
                <div class="px-6 py-4">
                    <div class="text-orange-500 font-bold text-xl mb-2">Percentage of Voltage Drop</div>
                    <p class="text-gray-700 text-base">
                        The percentage of voltage drop measures the loss of voltage in an electrical system, impacting the
                        efficiency and performance of devices.
                    </p>
                    <div class="mt-5">
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-yellow-300 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                            <i class="fa-solid fa fa-repeat mr-2" style="color: #ffffff;"></i>
                            Convert Now
                        </a>
                    </div>
                </div>

            </div>

            <!--Card 4-->
            <div class="bg-white rounded overflow-hidden shadow">
                <img class="w-58 mx-auto" src="image/power-quality.png" alt="Power Quality">
                <div class="px-6 py-4">
                    <div class="text-orange-500 font-bold text-xl mb-2">Power Factor / Power Quality</div>
                    <p class="text-gray-700 text-base">
                        Power factor, a key aspect of power quality, quantifies the efficiency of electrical power usage,
                        and affecting energy consumption.
                    </p>
                    <div class="mt-5">
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-yellow-300 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                            <i class="fa-solid fa fa-repeat mr-2" style="color: #ffffff;"></i>
                            Convert Now
                        </a>
                    </div>
                </div>

            </div>

            <!--Card 5-->
            <div class="bg-white rounded overflow-hidden shadow">
                <img class="w-58 mx-auto" src="image/energy-saving.png" alt="Energy Saving">
                <div class="px-6 py-4">
                    <div class="text-orange-500 font-bold text-xl mb-2">Energy Efficiency</div>
                    <p class="text-gray-700 text-base">
                        Energy efficiency optimizes resource usage, reducing energy consumption and environmental impact,
                        while
                        maximizing output and promoting sustainability for a greener sustainable future.
                    </p>
                    <div class="mt-5">
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-yellow-300 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                            <i class="fa-solid fa fa-repeat mr-2" style="color: #ffffff;"></i>
                            Convert Now
                        </a>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
@endsection
