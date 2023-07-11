@extends('layouts.inputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <section class="xl:mt-20">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-orange-500 flex items-center mb-6 text-2xl font-bold">
                        <img class="w-24 mx-auto" src="image/ampacity-conductors.png" alt="logo">
                    </h1>
                    <h1 class="text-orange-500 text-xl font-bold leading-tight tracking-tight md:text-2xl">
                        Ampacity of Conductors
                    </h1>

                    <p class="text-center">Ampacity of conductors is the maximum electrical current that can be present in a
                        conductor of a particular size without endangering safety. Loads are not allowed to push the current
                        over 80% of its specified ampacity.
                    </p>

                    {{-- FORM HERE --}}
                    <form method="POST" class="space-y-4 md:space-y-6" action="/ampacity-of-conductors/results">
                        @csrf

                        {{-- CKT SELECTION  --}}

                        <label for="circuit" class="block mb-2 text-sm font-medium text-gray-900">Select
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
                        @if ($errors->has('error'))
                            <div class="text-red-500 text-xs font-semibold alert alert-danger">
                                {{ $errors->first('error') }}
                            </div>
                        @endif

                        <div class="relative h-11 w-full min-w-[200px] mt-4">
                            <input
                                class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="realCurrent" placeholder=" " type="number" step="0.001" required />
                            <label
                                class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Real Current [I]
                            </label>
                        </div>

                        {{-- CONDUCTOR TYPE --}}
                        <label for="conductor-type" class="block mb-2 text-sm font-medium text-gray-900">Conductor
                            Type</label>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" id="conductor-type" aria-label="disabled input 2"
                                class="bg-gray-100 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                                name="conductorType" value="Copper" readonly>
                        </div>

                        {{-- NUMBER OF SETS --}}

                        <label for="numberset" class="block mb-2 text-sm font-medium text-gray-900">Number
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

                        <p class="text-xs text-orange-500">Note: Values can be seen on the wire's insulation or on
                            the electrical plan.</p>
                        {{-- MORE ON SELECT DROPDOWN --}}
                        <div class="flex">

                            {{-- WIRE SIZE  --}}
                            <div class="mr-2 w-1/2">
                                <label for="wire-size"
                                    class="block mb-2 text-sm font-medium text-gray-900 truncate">Conductor
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
                                <label for="wire-type" class="block mb-2 text-sm font-medium text-gray-900">Wire
                                    Type</label>
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
                                    class="block mb-2 text-sm font-medium text-gray-900 truncate">Ambient
                                    Temperature</label>
                                <input id="ambient-temperature" name="ambientTemp"
                                    class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                    placeholder="Temperature" readonly required>
                            </div>
                            {{-- END TEMPARATURE RATING  --}}

                            {{-- NO. OF CURRENT --}}
                            <div class="w-1/2">
                                <label for="no-current" class="block mb-2 text-sm font-medium text-gray-900">Current
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

    <script src="{{ asset('js/ampacity-conductors-input-autofill.js') }}"></script>
@endsection
