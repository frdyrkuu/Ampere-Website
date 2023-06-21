@extends('layouts.inputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <section class="xl:mt-20">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-orange-500 flex items-center mb-6 text-2xl font-bold">
                        <img class="w-24 mx-auto" src="image/ampacity-conductors.png" alt="logo">
                    </h1>
                    <h1 class="text-orange-500 text-xl font-bold leading-tight tracking-tight md:text-2xl">
                        Ampacity of Conductors
                    </h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, ut.</p>
                    {{-- FORM HERE --}}
                    <form method="POST" class="space-y-4 md:space-y-6" action="/ampacity-of-conductors/results">
                        @csrf

                        {{-- CKT SELECTION  --}}

                        <label for="circuit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            Circuit Breaker</label>
                        <select id="circuit" name="circuitNumber"
                            class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                            required>
                            <option value="" disabled selected required>Choose a Circuit</option>
                            <option value="1">CKT NUMBER 1</option>
                            <option value="2">CKT NUMBER 2</option>
                            <option value="3">CKT NUMBER 3</option>
                            <option value="4">CKT NUMBER 4</option>
                            <option value="5">CKT NUMBER 5</option>
                        </select>

                        {{-- REAL CURRENT  --}}

                        <div class="relative h-11 w-full min-w-[200px] mt-4">
                            <input
                                class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="realCurrent" placeholder=" " type="number" required />
                            <label
                                class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Real Current [I]
                            </label>
                        </div>

                        {{-- CONDUCTOR TYPE --}}
                        <label for="conductor-type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Conductor Type</label>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" id="conductor-type" aria-label="disabled input 2"
                                class="bg-gray-100 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="conductorType" value="Copper" readonly>
                        </div>

                        {{-- NUMBER OF SETS --}}

                        <label for="numberset" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number
                            of Sets</label>
                        <select id="numberset" name="numberSets"
                            class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                            required>
                            <option value="" disabled selected required>Choose a Number of Set</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="5">6</option>
                        </select>
                        {{-- MORE ON SELECT DROPDOWN --}}
                        <div class="flex">

                            {{-- WIRE SIZE  --}}
                            <div class="mr-2 w-1/2">
                                <label for="wire-size"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white truncate">Conductor
                                    Size</label>
                                <select id="wire-size"
                                    class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                    name="wireSize" required>
                                    <option value="" disabled selected required>Wire Size mm¹ [AWG]</option>
                                    <option value="2.0">2.0 [14]</option>
                                    <option value="3.5">3.5 [12]</option>
                                    <option value="5.5">5.5 [10]</option>
                                    <option value="8.0">8.0 [8]</option>
                                    <option value="14">14 [6]</option>
                                    <option value="22">22 [4]</option>
                                    <option value="30">30 [2]</option>
                                    <option value="38">38 [1]</option>
                                    <option value="50">50 [1/0]</option>
                                    <option value="60">60 [2/0]</option>
                                    <option value="80">80 [3/0]</option>
                                    <option value="100">100 [4/0]</option>
                                    <option value="125">125 [250]</option>
                                    <option value="150">150 [300]</option>
                                    <option value="175">175 [350]</option>
                                    <option value="200">200 [400]</option>
                                    <option value="250">250 [500]</option>
                                    <option value="325">325</option>
                                    <option value="375">375 [750]</option>
                                    <option value="400">400 [800]</option>
                                    <option value="500">500 [1000]</option>
                                </select>
                            </div>
                            {{-- END TEMPARATURE RATING  --}}

                            {{-- WIRE TYPE --}}
                            <div class="w-1/2">
                                <label for="wire-type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wire Type</label>
                                <select id="wire-type"
                                    class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                    name="wireType" required>
                                    <option value="" disabled selected required>Wire Type</option>
                                    <option value="TW">TW</option>
                                    <option value="UF">UF</option>
                                    <option value="RHW">RHW</option>
                                    <option value="THHW">THHW</option>
                                    <option value="THW">THW</option>
                                    <option value="THWN">THWN</option>
                                    <option value="XHHW">XHHW</option>
                                    <option value="USE">USE</option>
                                    <option value="ZW">ZW</option>
                                    <option value="TBS">TBS</option>
                                    <option value="SA">SA</option>
                                    <option value="SIS">SIS</option>
                                    <option value="FEP">FEP</option>
                                    <option value="FEPB">FEPB</option>
                                    <option value="MI">MI</option>
                                    <option value="RHH">RHH</option>
                                    <option value="RHW-2">RHW-2</option>
                                    <option value="THHN">THHN</option>
                                    <option value="THW-2">THW-2</option>
                                    <option value="THWN-2">THWN-2</option>
                                    <option value="USE-2">USE-2</option>
                                    <option value="XHH">XHH</option>
                                    <option value="XHHW-2">XHHW-2</option>
                                    <option value="ZW-2">ZW-2</option>
                                </select>
                            </div>
                            {{-- END WIRE TYPE --}}
                        </div>

                        {{-- MORE ON SELECT DROPDOWN 2 --}}
                        <div class="flex">

                            {{-- TEMPERATURE RATING  --}}
                            <div class="mr-2 w-1/2">
                                <label for="ambient-temperature"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white truncate">Ambient
                                    Temperature</label>
                                <input id="ambient-temperature" name="ambientTemp"
                                    class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                    placeholder="Temperature" readonly required>
                            </div>
                            {{-- END TEMPARATURE RATING  --}}

                            {{-- NO. OF CURRENT --}}
                            <div class="w-1/2">
                                <label for="no-current"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                    Carrying</label>
                                <input id="no-current" name="noCurrent"
                                    class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                    placeholder="Current" readonly required>
                            </div>
                            {{-- END WIRE TYPE --}}
                        </div>

                        {{-- BUTTON PROCEED TO RESULTS --}}

                        <button type="submit"
                            class="w-full text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">&#8594
                            Proceed to Results</button>

                    </form>
                    {{-- END FORM --}}
                </div>
            </div>
        </div>
    </section>
    <script>
        const wireSizeSelect = document.getElementById('wire-size');
        const wireTypeSelect = document.getElementById('wire-type');
        const ambientTemperatureInput = document.getElementById('ambient-temperature');
        const noCurrentInput = document.getElementById('no-current');

        // Define the temperature and current values based on the selected options
        const temperatureValues = {
            'TW': '60°C',
            'UF': '60°C',
            'RHW': '75°C',
            'THHW': '75°C',
            'THW': '75°C',
            'THWN': '75°C',
            'XHHW': '75°C',
            'USE': '75°C',
            'ZW': '75°C',
            'TBS': '90°C',
            'SA': '90°C',
            'SIS': '90°C',
            'FEP': '90°C',
            'FEPB': '90°C',
            'MI': '90°C',
            'RHH': '90°C',
            'RHW-2': '90°C',
            'THHN': '90°C',
            'THW-2': '90°C',
            'THWN-2': '90°C',
            'USE-2': '90°C',
            'XHH': '90°C',
            'XHHW-2': '90°C',
            'ZW-2': '90°C',
            // Add more temperature values for other options
        };

        const currentValues60C = {
            '2.0': '15',
            '3.5': '20',
            '5.5': '30',
            '8.0': '40',
            '14': '55',
            '22': '70',
            '30': '85',
            '38': '100',
            '50': '115',
            '60': '130',
            '80': '155',
            '100': '185',
            '125': '210',
            '150': '240',
            '175': '260',
            '200': '275',
            '250': '315',
            '325': '370',
            '375': '395',
            '400': '400',
            '500': '445',
            // Add more temperature values for other options
        };

        const currentValues75C = {
            '2.0': '20',
            '3.5': '25',
            '5.5': '35',
            '8.0': '50',
            '14': '65',
            '22': '85',
            '30': '100',
            '38': '115',
            '50': '140',
            '60': '155',
            '80': '190',
            '100': '220',
            '125': '255',
            '150': '285',
            '175': '305',
            '200': '325',
            '250': '375',
            '325': '435',
            '375': '470',
            '400': '480',
            '500': '530',
            // Add more temperature values for other options
        };

        const currentValues90C = {
            '2.0': '25',
            '3.5': '30',
            '5.5': '40',
            '8.0': '55',
            '14': '75',
            '22': '95',
            '30': '115',
            '38': '130',
            '50': '150',
            '60': '170',
            '80': '205',
            '100': '240',
            '125': '285',
            '150': '320',
            '175': '345',
            '200': '360',
            '250': '425',
            '325': '490',
            '375': '530',
            '400': '535',
            '500': '595',
            // Add more temperature values for other options
        };
        // Event handler for the wire type select box
        wireTypeSelect.addEventListener('change', () => {
            const selectedWireType = wireTypeSelect.value;
            ambientTemperatureInput.value = temperatureValues[selectedWireType] || '';

            updateNoCurrentInput();
        });

        // Event handler for the wire size select box
        wireSizeSelect.addEventListener('change', () => {
            updateNoCurrentInput();
        });

        // Event handler for the ambient temperature input
        ambientTemperatureInput.addEventListener('input', () => {
            updateNoCurrentInput();
        });

        // Function to update the No. of Current input based on the selected values
        function updateNoCurrentInput() {
            const selectedWireSize = wireSizeSelect.value;
            const ambientTemperature = ambientTemperatureInput.value;

            if (ambientTemperature === '60°C') {
                noCurrentInput.value = currentValues60C[selectedWireSize] || '';
            } else if (ambientTemperature === '75°C') {
                noCurrentInput.value = currentValues75C[selectedWireSize] || '';
            } else if (ambientTemperature === '90°C') {
                noCurrentInput.value = currentValues90C[selectedWireSize] || '';
            } else {
                noCurrentInput.value = '';
            }
        }
    </script>
@endsection
