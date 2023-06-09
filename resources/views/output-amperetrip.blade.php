@extends('layouts.outputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    {{-- <p>Circuit Number: {{ $circuitNumber }}</p>
    <p>Ampere Trip: {{ $ampereTrip }}</p>
    <p>Real Current: {{ $realCurrent }}</p>
    <p>Ampere Trip Rating: {{ $ampereTrip_Results }}</p>
    <p>Percentage: {{ $percentage }}%</p> --}}
    <section class="mt-5">
        <div class="flex px-4">
            <div class="w-full sm:w-3/4 mx-auto">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="bg-orange-500 text-white py-6 px-8 rounded-t-lg">
                        <h1 class="text-xl sm:text-3xl font-semibold ">Results: <span class="font-extralight text-xl">Ampere
                                Trip
                                Rating</span></h1>
                    </div>
                    <div class="flex flex-col-reverse lg:flex-row">
                        <div class="bg-gray-100 py-8 px-10 border-b sm:border-b-0 sm:border-r flex w-full lg:w-1/3">
                            <div class="flex flex-col w-full sm:w-full md:w-full lg:w-full xl:w-full">

                                {{-- LEFT CONTENT --}}
                                <div class="mt-4 relative h-11 w-full ">
                                    <input name="circuitNumber"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="text" value="{{ $circuitNumber }}" readonly required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Circuit No.
                                    </label>
                                </div>
                                <br>

                                {{-- AMPERE TRIP  --}}

                                <div class="mt-4 relative h-11 w-full">
                                    <input name="ampereTrip"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" value="{{ $ampereTrip }}" readonly required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Ampere Trip [AT]
                                    </label>
                                </div>
                                <br>

                                {{-- REAL CURRENT  --}}
                                <div class="relative h-11 w-full">
                                    <input name="realCurrent"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" value="{{ $realCurrent }}" readonly required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Real Current [I]
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div
                            class="bg-gray-100 py-8 px-2 border-b sm:border-b-0 sm:border-r flex flex-col-reverse xl:flex-row w-full lg:w-3/4">
                            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-1/2 flex flex-col">
                                {{-- SECOND CONTENT  --}}
                                {{-- AMPERE Percentage  --}}
                                <div>
                                    <label for="percentage" class="pb-2 text-center w-full">Ampere Trip Percentage: </label>
                                    <input type="text" class="w-full bg-transparent text-6xl text-center"
                                        value="{{ $percentage }}%" id="percentage" readonly required>
                                </div>
                                <div class="">
                                    {{-- ADD SOME COMMENT ABOUT THE RESULT HERE --}}
                                    <h1 class="text-center pt-4 font-bold text-2xl" id="condition">Good</h1>
                                    <p class="px-4 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nam repudiandae
                                        doloribus rem, aspernatur repellat voluptate tempora eligendi illo neque.</p>
                                </div>
                            </div>
                            <div class="border-l border-gray-200"></div> <!-- Vertical Partition -->
                            <div
                                class="w-full sm:w-full md:w-full lg:w-full xl:w-1/2 flex items-center justify-center pb-3 animate-reveal lg:animate-reveal-x">
                                <img class="w-48" src="" alt="codition-image" id="conditionImage">
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200"></div>
                    <div class="bg-gray-100 p-10 sm:p-10 rounded">
                        <h1>Statements:</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, aperiam quae, expedita
                            architecto quia optio sit, unde quo corporis quas harum officiis! Iste facere cupiditate
                            exercitationem. Expedita ab nihil accusantium tempore, consequatur alias culpa similique
                            accusamus, tempora aliquid ad quam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
