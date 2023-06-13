@extends('layouts.outputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    {{-- <h1 class="text-center mt-5">OUTPUT AMPACITY OF CONDUCTORS</h1>
    <br>
    <div class="text-center">
        <p>Circuit Number: {{ $circuitNumber }}</p>
        <p>Real Current: {{ $realCurrent }}</p>

        <p>Conductor Type: {{ $conductorType }}</p>
        <p>Wire Size: {{ $wireSize }}mm</p>
        <p>Wire Type: {{ $wireType }}</p>
        <p>Ambient Temperature: {{ $ambientTemp }}</p>
        <p>Current Carrying Capacity: {{ $noCurrent }}</p>
        <p>Number of Sets: {{ $numberSet }}</p>
        <br>
        <p>Ampacity: {{ $ampacity }}</p>
        <p>Ampacity Percentage: {{ $percentage }}%</p>


    </div> --}}

    <section class="mt-5">
        <div class="flex px-4">
            <div class="w-full sm:w-3/4 mx-auto">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="bg-orange-500 text-white py-6 px-8 rounded-t-lg">
                        <h1 class="text-xl sm:text-3xl font-semibold ">Results: <span class="font-extralight text-xl">Ampacity
                                Percentage</span></h1>
                    </div>
                    <div class="flex flex-col-reverse lg:flex-row">
                        <div class="bg-gray-100 py-8 px-10 border-b sm:border-b-0 sm:border-r flex w-full lg:w-1/3">
                            <div class="flex flex-col w-full sm:w-full md:w-full lg:w-full xl:w-full">

                                {{-- LEFT CONTENT --}}
                                <div class="mt-4 relative h-11 w-full ">
                                    <input name="circuitNumber"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="text" value="CKT NUMBER {{ $circuitNumber }}" readonly
                                        required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Circuit No.
                                    </label>
                                </div>

                                <div class="flex mt-4 gap-2">
                                    {{-- Real Current  --}}

                                    <div class="relative h-11 w-full">
                                        <input name="realCurrent"
                                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                            placeholder=" " type="number" value="{{ $realCurrent }}" readonly required />
                                        <label
                                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                            Real Current [I]
                                        </label>
                                    </div>

                                    {{-- Conductor Type  --}}
                                    <div class="relative h-11 w-full">
                                        <input name="conductorType"
                                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                            placeholder=" " type="text" value="{{ $conductorType }}" readonly required />
                                        <label
                                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                            Conductor Type
                                        </label>
                                    </div>
                                </div>

                                <div class="flex gap-2">

                                    {{-- Wire Size --}}
                                    <div class="mt-4 relative h-11 w-full">
                                        <input name="wireSize"
                                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                            placeholder=" " type="text" value="{{ $wireSize }}mm" readonly
                                            required />
                                        <label
                                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                            Wire Size
                                        </label>
                                    </div>

                                    {{-- Wire Type --}}
                                    <div class="mt-4 relative h-11 w-full">
                                        <input name="wireType"
                                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                            placeholder=" " type="text" value="{{ $wireType }}" readonly required />
                                        <label
                                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                            Wire Type
                                        </label>
                                    </div>
                                </div>

                                {{-- Number of Set --}}
                                <div class="mt-4 relative h-11 w-full">
                                    <input name="numberSet"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" value="{{ $numberSet }}" readonly required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Number of Set
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
                                    <p class="px-4 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Suscipit nam repudiandae
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

        {{-- JAVASCRIPT FOR THE FUNCTION COLOR CHANGE FOR UI INFORMATION   --}}
        <script>
            // Get the input element
            const input = document.getElementById('percentage');

            // Get the percentage value from the input element
            const percentage = parseFloat(input.value);

            // Determine the color class, condition, and image source based on the percentage value
            let colorClass;
            let condition;
            let imageSource;

            switch (true) {
                case percentage >= 81 && percentage <= 100:
                    colorClass = 'text-red-500';
                    condition = 'Alert';
                    imageSource = '/image/alert.png';
                    break;
                case percentage >= 75 && percentage < 81:
                    colorClass = 'text-yellow-500';
                    condition = 'Neutral';
                    imageSource = '/image/neutral.png';
                    break;
                case percentage >= 0 && percentage < 75:
                    colorClass = 'text-green-500';
                    condition = 'Good';
                    imageSource = '/image/good.png';
                    break;
                default:
                    colorClass = 'text-black';
                    condition = 'Unknown';
                    imageSource = '/image/good.png';
                    break;
            }

            // Add the color class to the input element
            input.classList.add(colorClass);

            // Get the condition element
            const conditionElement = document.getElementById('condition');

            // Add the color class to the condition element
            conditionElement.classList.add(colorClass);

            // Update the condition text content
            conditionElement.textContent = condition;

            // Get the condition image element
            const conditionImageElement = document.getElementById('conditionImage');

            // Set the image source
            conditionImageElement.src = imageSource;
            conditionImageElement.alt = condition;

            console.log(colorClass);
        </script>


    </section>
@endsection
