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
                                        value="{{ $percentage }}" id="percentage" readonly required>
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
                        <p class="py-2"><span class="font-bold">PEC breaker rule of 80%.</span> The most fundamental PEC
                            regulation
                            specifies that you are not allowed
                            to push the current over 80% of its specified ampacity. A 20-amp breaker, for instance, can only
                            handle a 16A current. 20% of the maximum is 16A. the circuit breaker's designated ampacity. This
                            is a precaution; you should have some overhead to keep the circuit from burning up.</p>
                        <p class="py-2">The circuit, cables, and wires, as well as the connected device, may heat up or,
                            in the event of
                            a short circuit, begin to smoke and burn if an improperly sized circuit breaker is used. For
                            efficient operation, a circuit breaker of the proper size is required.</p>

                        <p class="py-2">If we use a 100A circuit breaker for a 30A circuit, it won't protect the circuit
                            from fault currents and may burn and damage the device because a current greater than 30 amps
                            won't trigger the circuit breaker. To put it simply, we must utilize a circuit breaker that is
                            the correct size for the device. The circuit breaker current should be 125% of the circuit's
                            current, neither more nor lower. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-4 sm:px-0 px-4">
        <h1 class="text-orange-500 text-2xl font-bold">Tips to help prevent a circuit breaker from tripping <span><i
                    class="fa fa-lightbulb-o text-orange-500" style="font-size:48px"></i></span></h1>
        <div class="px-2 py-4">
            <h1 class="font-bold text-base">1. Choose a Higher Rating of Overcurrent Protective Device </h1>
            <p class="p-2 text-base">The rated current of a circuit breaker is a significant variable since it establishes
                the maximum current the
                breaker can handle without being damaged. Additionally, it is utilized to choose the right breaker size for
                a given application. </p>
            <p class="p-2 text-base">When compared to a breaker with a lower-rated current, a higher-rated current circuit
                breaker can handle
                higher levels of current.</p>

            <p class="p-2 text-base">It's significant to remember that a circuit breaker's rated current is also influenced
                by the temperature of the device's various components.</p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">2. Don’t Overload One Circuit</h1>
            <p class="p-2 text-base">Your electrical load will be spread out among several circuits, which means that each
                breaker won't have to support the entire amount of electricity running through it. Therefore, there is a
                lower chance that you would unintentionally overload a breaker, causing it to trip and shut off. There's a
                significant likelihood that a breaker is simply overloaded if you notice that it trips more frequently than
                the others.</p>
            <p class="p-2 text-base">See if it helps to try disconnecting some gadgets or to use some while not using
                others. This happens frequently in kitchens where multiple culinary equipment, such as an electric range,
                oven, microwave, and others, may be on and operating at once, using a massive quantity of current through a
                single, tiny single-circuit breaker.</p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">3. Replace Old Electrical Components</h1>
            <p class="p-2 text-base">Electrical parts will deteriorate and age over time. Greater resistance is presented by
                aging equipment, which must be overcome by drawing greater current. Drawing more current produces more heat,
                and more heat leads to some of the conditions we've already mentioned, when there is a greatly increased
                risk of fire or injury.</p>
            <p class="p-2 text-base">The additional current also raises the possibility that your circuit breaker will trip,
                cutting off that specific circuit. When your breaker is old, it can draw too much current though you may not
                realize it due to the breaker's age, the age of the wires in your wall, and the age of the receptacles
                connected to the wires.</p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">4. Install GFCI Outlets</h1>
            <p class="p-2 text-base">Breakers and GFCI receptacles are essential for home safety. They are especially
                crucial in places with water, such as toilets, swimming pools, gardens, and garages. A functioning GFCI will
                save someone from a serious electric shock or electrocution by identifying shorts, overloads, and ground
                faults (an irregular path between the source of a current and a grounded surface), and protect dwellings
                from electrical hazards by shutting off the power.</p>
            <p class="p-2 text-base">GFCIs can help you avoid frequent trips of your circuit breakers while also protecting
                you when utilizing energy in higher-risk locations like your bathrooms or kitchen.</p>
        </div>

    </section>

    <script>
        const input = document.getElementById('percentage');

        // Get the percentage value from the input element
        const inputValue = input.value.replace(',', '');

        const percentage = parseFloat(input.value);

        // Determine the color class, condition, and image source based on the percentage value
        let colorClass;
        let condition;
        let imageSource;

        const numericPercentage = parseFloat(percentage.toFixed(3));

        switch (true) {
            case numericPercentage >= 81:
                colorClass = 'text-red-500';
                condition = 'Alert';
                imageSource = '/image/alert.png';
                break;
            case numericPercentage >= 75 && numericPercentage <= 80:
                colorClass = 'text-yellow-500';
                condition = 'Neutral';
                imageSource = '/image/neutral.png';
                break;
            case numericPercentage >= 0 && numericPercentage <= 74:
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

        // Update the input field value with the formatted percentage and %
        input.value = numericPercentage.toFixed(3) + "%";

        console.log(numericPercentage);
    </script>
@endsection
