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
                        <p class="py-2">Voltage drop (VD) takes place when a cable run's voltage is lower at the end than
                            it was at its start. Any wire, regardless of size or length, will have some resistance; when a
                            current flows through this dc resistance, the voltage falls. The resistance and reactance of the
                            cable grow proportionally with its length. VD thus poses a special issue with extended cable
                            lines. </p>

                        <p class="py-2">Circuits with high voltage loss should be repaired or cables replaced. Check for
                            corrosion, damaged wires, weak connections, or a battery cable with a smaller gauge if the
                            voltage drop is more than what is expected.</p>

                        <p class="py-2">If excessive voltage drops are not managed appropriately, they could result in low
                            voltage powering your equipment, which will cause it to operate improperly or not at all,
                            damaging it in the process. Voltage drops also result in heat at a connection with high
                            resistance, which could start fires.</p>


                        <p class="py-2 font-bold">Electrical circuits and equipment's lifespan and operational efficiency
                            can be
                            harmed by voltage drops of more than 3%.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-4 sm:px-0 px-4">
        <h1 class="text-orange-500 text-2xl font-bold">Strategies to reduce these voltage drops:<span><i
                    class="fa fa-lightbulb-o text-orange-500" style="font-size:48px"></i></span></h1>
        <div class="px-2 py-4">
            <h1 class="font-bold text-base">1. Increase the Quantity of Conductors or the Size of the Conductor</h1>
            <p class="p-2 text-base">The resistance will decrease when the amount and size of the conductors are increased,
                resulting in a reduction in the voltage drop and a gain in efficiency. Additionally, it can reduce the
                overall power losses associated with conductors of a conventional size. By inserting an isolated conductor,
                voltage drop brought on by grounding can be minimized.</p>

            <p class="p-2 text-base">The overall power losses, which are often higher in conductors of standard size (as
                indicated by the general codes), can also be significantly reduced by this process.</p>

            <p class="p-2 text-base text-justify">**For the accurate sizing of conductor, check PEC Table 3.10.1.16
                Allowable Ampacities
                of Insulated Conductors Rated 0 Through 2000 Volts, 60°C Through 90°C (140°F Through 194°F), Not More Than
                Three Current-Carrying Conductors in Raceway, Cable, or Earth (Directly Buried), Based on Ambient
                Temperature of 30°C (86°F). </p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">2. Reduce Power Load</h1>
            <p class="p-2 text-base">Voltage drops can be lessened by reducing the amount of electrical equipment connected
                to a circuit, which reduces the power load. However, in this instance, care should also be taken to ensure
                that there are no more than six outlets connected to each branch circuit.</p>
            <p class="p-2 text-base">Receptacles in residential complexes should not be more than 50 feet apart from one
                another, and there should be at least one outside receptacle installed for each home, it should be noted.
            </p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">3. Decrease the Length of the Conductor</h1>
            <p class="p-2 text-base">The resistance of the conductor decreases with a shorter conductor, which lowers
                voltage drop. Circuit lengths are typically predetermined, however if panels or subpanels are placed as
                close to the loads as practicable, especially for sensitive electronic equipment, some control can be
                applied at the design stage.</p>

            <p class="p-2 text-base">The voltage drop will be greater if the wire is lengthy but still the right size; but,
                because the resistance is distributed over the entire wire, it won't get hotter in one place like a bad
                connection. The result won't lead to a hazardous state in the conductor, but it will LOWER circuit amperage
                and perhaps poor performance of the device.</p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">4. Decrease the Temperature of the Conductor</h1>
            <p class="p-2 text-base">Voltage drops occur when conductors reach high temperatures because they block the
                passage of power. Therefore, one can reduce these voltage drops by intentionally lowering the conductor's
                temperature.</p>

            <p class="p-2 text-base">It should be remembered that the resistance rises by 0.3% for every degree the
                temperature rises. The formula to be used:</p>
            <p class="py-2 text-center font-serif text-2xl italic border w-1/2 mx-auto mt-2">R<sub>2</sub> = R<sub>1</sub>
                [1 + α(T<sub>2</sub> -
                T<sub>1</sub>)]</p>
            <p class="py-2 font-serif text-base">
                Where,
            </p>

            <div class="font-serif text-xl">
                <p>R<sub>1</sub> = Resistance to power flow at Temperature, T<sub>1</sub></p>
                <p>R<sub>2</sub> = Resistance to power flow at Temperature, T<sub>2</sub></p>
                <p>α = Coefficient of electrical resistance of Copper</p>
            </div>

            <p class="py-2 text-base">As the difference between T<sub>2</sub> and T<sub>1</sub> decreases, the resistance to
                power ‘α ‘ will also cease to decrease.</p>
        </div>
    </section>


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

        input.value = percentage.toFixed(3) + "%";

        console.log(percentage);
    </script>
@endsection
