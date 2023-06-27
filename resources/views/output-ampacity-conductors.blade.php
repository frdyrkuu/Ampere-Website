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
                        <p class="py-2">Wire ampacity is the maximum electrical current (or "Amps") that can be present in
                            a conductor of
                            a particular size without endangering safety. An inner copper conductor and the outer wire
                            insulation make up a wire in its simplest form. As the current level rises, the conductor's
                            temperature will increase. The determination of wire ampacity has significance since it
                            establishes the wire size and temperature rating of the wire insulation needed for the
                            application.</p>

                        <p class="py-2">By selecting a conductor that is too tiny for the specified electrical load, you
                            run the risk of generating an overheating condition that could damage the wire insulation, limit
                            its lifespan, and eventually melt it, resulting in an electrical fire. Each year, electrical
                            fires destroy tens of thousands of buildings, causing billions of dollars in damages as well as
                            thousands of human injuries, some of which are deadly. Therefore, choosing wires with the
                            appropriate ampacity is essential for safety.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="max-w-7xl mx-auto py-4 sm:px-0 px-4">
        <h1 class="text-orange-500 text-2xl font-bold">Benefits of Bigger Wire Size for Your Power Bill and Home<span><i
                    class="fa fa-lightbulb-o text-orange-500" style="font-size:48px"></i></span></h1>
        <div class="px-2 py-4">
            <h1 class="font-bold text-base">1. Faster Movement of Electrons through the Wire </h1>
            <p class="p-2 text-base">More space for electron movement through the circuit is provided by the larger wire's
                wider diameter.</p>

            <p class="p-2 text-base">Smaller gauge wire is therefore rated for lower maximum amperage (electric current)
                restrictions than bigger gauge wire. 15 amps of current may be carried by even the smallest ordinary
                household cable. The largest common type of wire can support a maximum current of 95 amps and is typically
                exclusively used in electrical service panels.</p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">2. Too-Small Wire Can Get Hot</h1>
            <p class="p-2 text-base">The wiring becomes extremely hot when you overload a wire by plugging in an appliance
                that requires more current than the wire is rated for. Wires that are overheated may lose their insulation
                integrity. People who come into contact with exposed wires by accident run the risk of receiving a shock.
            </p>

            <p class="p-2 text-base">To enable an overrated appliance to operate, add a greater capacity circuit breaker or
                turn off the breaker, but be aware that doing so increases the possibility of your home catching fire. Your
                home won't be spared the effects of overloading your inadequate wiring due to the new circuit.</p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">3. Larger Diameter Wires Stays at Cool Temperature </h1>
            <p class="p-2 text-base">Smaller wires become hotter than bigger diameter wires when both are carrying the same
                current load, even if your wiring is appropriately rated for the amperage you want. Compared to the bigger
                capacity cable, the smaller wire loses more electricity through heat loss.</p>
            <p class="p-2 text-base">Depending on the size of your electrical system, the power savings could allow you to
                recover the cost of the larger cable in two to three years. Remember that whether you utilize regular or
                upsized wiring, most labor costs will remain the same. For larger-sized wiring, the wire itself accounts for
                most of your investment.</p>
        </div>

        <div class="px-2 py-2">
            <h1 class="font-bold text-base">4. Bigger Wires Offer Additional Benefits</h1>
            <p class="p-2 text-base">You have more design freedom when using larger gauge AWG wire for your electrical
                system. When your wiring has increased current potential, an electrician can add more outlets. </p>

            <p class="p-2 text-base">If you decide to upgrade your home's wiring in the future, installing larger wires
                might not be necessary if your property already has higher-rated wiring. Installing wiring with a higher
                capacity now can spare you the hassle of having to tear down walls in the future to update the wires if you
                intend to add outlets or make other improvements to a room later.</p>

            <p class="p-2 text-base">Larger wire also provides protection against voltage drops that compromise the
                efficiency of your electrical appliances and gadgets. For instance, poor wiring results in lights dimming
                when a refrigerator's compressor kicks on. Voltage fluctuations are annoying and eventually harm motors and
                other electrical equipment.</p>

            <p class="p-2 text-base">Your wiring is not supplying the necessary current if your fuses frequently blow or
                your toaster runs slowly. By hiring an electrician to install larger wiring for you, you can improve the
                safety, energy effectiveness, and future expandability of your home's electrical system.</p>
        </div>
    </section>


    <script src="{{ asset('js/ampacity-conductors-autofill.js') }}"></script>
@endsection
