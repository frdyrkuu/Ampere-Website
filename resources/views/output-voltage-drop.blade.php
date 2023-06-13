@extends('layouts.outputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    {{-- <h1 class="text-center mt-5">OUTPUT PERCENTAGE OF VOLTAGE DROP</h1>
    <br>
    <div class="text-center">
        <p>Circuit Number: {{ $circuitNumber }}</p>
        <br>
        <p>Real Voltage: {{ $realVoltage }}</p>

        <p>Voltage: {{ $voltage }}</p>
        <p>Percentage: {{ $percentage }}%</p>
    </div> --}}

    <section class="mt-5">
        <div class="flex px-4">
            <div class="w-full sm:w-3/4 mx-auto">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="bg-orange-500 text-white py-6 px-8 rounded-t-lg">
                        <h1 class="text-xl sm:text-3xl font-semibold ">Results: <span
                                class="font-extralight text-xl">Percentage of Voltage Drop Result</span></h1>
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
                                <br>

                                {{-- AMPERE TRIP  --}}

                                <div class="mt-4 relative h-11 w-full">
                                    <input name="realVoltage"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" value="{{ $realVoltage }}" readonly required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Real Voltage
                                    </label>
                                </div>
                                <br>

                                {{-- REAL CURRENT  --}}
                                <div class="relative h-11 w-full">
                                    <input name="voltage"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" value="{{ $voltage }}" readonly required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                        Voltage [V]
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
                                    <label for="percentage" class="pb-2 text-center w-full">Percentage of Voltage Drop:
                                    </label>
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
            let colorClass = 'text-green-500'; // Default to green
            let condition = 'Good'; // Default condition
            let imageSource = '/image/good.png'; // Default image source

            if (percentage >= 3.1 && percentage <= 100) {
                colorClass = 'text-red-500';
                condition = 'Alert';
                imageSource = '/image/alert.png';
            } else if (percentage >= 0 && percentage <= 3) {
                colorClass = 'text-green-500';
                condition = 'Good';
                imageSource = '/image/good.png';
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
        </script>

    </section>
@endsection
