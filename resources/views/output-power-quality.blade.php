@extends('layouts.outputlayout')

@section('content')
    {{-- <div class="text-center mt-10">
        <p>Circuit Number: {{ $circuitNumber }}</p>
        <p>Ampere Trip: {{ $powerQuality }}</p>
        <p>Real Current: {{ $condition }}</p>
    </div> --}}
    <h1 class="text-orange-500 font-bold text-2xl sm:text-4xl px-6 mt-5">Power Quality Result</h1>
    <section class="p-4">
        <div
            class="card p-6 rounded-2xl shadow-xl max-w-7xl mx-auto flex flex-col-reverse justify-center px-6 items-center lg:items-start sm:flex-row">
            <article class="ml-0 lg:ml-20 md:w-full">
                <h1 class="text-2xl sm:text-4xl font-semibold text-orange-500">Power Factor</h1>
                <div class="gap-5 w-full lg:w-1/2">
                    <div class="mt-4 relative h-11 w-full ">
                        <input name="circuitNumber"
                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" " type="text" value="CKT NUMBER {{ $circuitNumber }}" readonly required />
                        <label
                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Circuit No.
                        </label>
                    </div>

                    <div class="mt-4 relative h-11 w-full min-w-[200px]">
                        <input name="powerQuality"
                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" " type="number" step="0.001" value="{{ $powerQuality }}" readonly required />

                        <label
                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Power Quality [p.f]
                        </label>
                    </div>

                    <div class="mt-4 relative h-11 w-full ">
                        <input name="circuitNumber"
                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" " type="text" value="{{ $condition }}" readonly required />
                        <label
                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Condition
                        </label>
                    </div>

                    {{-- <div class="mt-4 relative h-11 w-full ">
                        <input name="numberData"
                            class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" " type="text" value="{{ $usercountdata }}" readonly required />
                        <label
                            class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Number of Data
                        </label>
                    </div> --}}
                </div>
            </article>
            <div class="w-full h-auto animate-reveal mb-5">
                {{-- <img class="w-9/12 m-auto sm:m-none object-cover animate-floating" src="/image/picture.png" alt="burger"> --}}

                <div class="bg-white rounded-lg shadow-sm p-4 w-full">
                    <!-- Card content for column 4 -->
                    <canvas id="lineChart_PowerQuality"></canvas>
                </div>
            </div>

        </div>

    </section>

    <section class="max-w-7xl mx-auto p-6">

        <h2 class="text-gray-700 text-2xl font-semibold">
            How to improve the Power Factor?
        </h2>
        <div id="tips-container">

        </div>


        <div>
            <h2 class="text-gray-700 text-2xl font-semibold">Why are we correcting poor power factor?</h2>
            <div class="gap-2 mt-2 sm:text-lg text-md">
                <p>Poor power factor can result in voltage drops and power losses,
                    which can lead to motor failure and overheating.</p>

                <br>
                <p>
                    An electrical load with a poor power factor consumes more current than a higher power factor to transfer
                    the
                    same amount of usable power, which might overburden the energy distribution system.
                </p>
            </div>
            <br>
            <h2 class="text-gray-700 text-2xl font-semibold mt-5">What are the benefits of improving the power factor?</h2>

            <div class="gap-2 mt-2 p-2 text-md sm:text-lg">
                <p class="py-2">&#x2713; A decrease in electricity costs.</p>
                <p class="py-2">&#x2713; Additional kVA is available from the current supply.</p>
                <p class="py-2">&#x2713; Lower voltage drop in cables with extended runs.</p>
                <p class="py-2">&#x2713; Lowering I2 R losses in transformers and other distribution hardware.</p>
                <p class="py-2">&#x2713; Reduced electrical load on cables and electrical components results in longer
                    equipment life.</p>
                <p class="py-2">&#x2713; Reduced power consumption as a result of improved energy efficiency will result
                    in
                    lower greenhouse gas emissions and less fossil fuel depletion by power plants. </p>
            </div>
        </div>

    </section>

    <script>
        const usercount = {{ $usercountdata }};
        var tip = "";

        if (usercount === 1 || usercount === 2) {
            tip = `<div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option A: Add a capacitor bank (capacitors in parallel) with the connected motor or
                    lighting circuits. It may also be used at the equipment,
                    distribution board, or installation's starting point. </p>

                <br>
                <p>
                    &#x2713; Power factor correction, which usually comes in the form of capacitors, is used to neutralize the maximum amount
                    of the magnetizing current in order to minimize losses in the
                    distribution system and to lower the electricity cost.
                </p>
                <br>
                <p>
                    &#x2713; The leading current a capacitor produces balances
                    the lagging aspect of an inductive load. As a result, the system's power factor increases.</p>
                <br>
                <p>&#x2713; This technology aids in addressing the phase shift and power factor lag in an AC power source, improving the effectiveness of electrical energy transfer.</p>
                <br>
                <p>&#x2713; Typically, the correction would be placed on either the Main or Delta contactor circuits.</p>
                </div>

                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option B: Consider Static Var Generator (SVG)</p>
                <br>
                <p>
                    &#x2713; Due to the SVG's dynamic, 15ms, evaluation and correction on each phase, immunity to existing system harmonics, and capacity to rectify the growing phase imbalances, it was suggested as an alternative to a conventional capacitor-based PFC system.
                </p>
                <br>
                <p>
                    &#x2713; Additionally, the SVG provides reactive compensation current that is infinitely variable without the use of contactor-connected stages of capacitors.</p>
                </div>`;


        } else if (usercount === 3) {

            tip = `<div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option A: Add a capacitor bank (capacitors in parallel) with the connected motor or
                    lighting circuits. It may also be used at the equipment,
                    distribution board, or installation's starting point. </p>

                <br>
                <p>
                    &#x2713; Power factor correction, which usually comes in the form of capacitors, is used to neutralize the maximum amount
                    of the magnetizing current in order to minimize losses in the
                    distribution system and to lower the electricity cost.
                </p>
                <br>
                <p>
                    &#x2713; The leading current a capacitor produces balances
                    the lagging aspect of an inductive load. As a result, the system's power factor increases.</p>
                <br>
                <p>&#x2713; This technology aids in addressing the phase shift and power factor lag in an AC power source, improving the effectiveness of electrical energy transfer.</p>
                <br>
                <p>&#x2713; Typically, the correction would be placed on either the Main or Delta contactor circuits.</p>
                </div>

                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option B: Consider Static Var Generator (SVG)</p>
                <br>
                <p>
                    &#x2713; Due to the SVG's dynamic, 15ms, evaluation and correction on each phase, immunity to existing system harmonics, and capacity to rectify the growing phase imbalances, it was suggested as an alternative to a conventional capacitor-based PFC system.
                </p>
                <br>
                <p>
                    &#x2713; Additionally, the SVG provides reactive compensation current that is infinitely variable without the use of contactor-connected stages of capacitors.</p>
                </div>


                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option C: Connect a Synchronous Condenser across as supply.</p>
                <br>
                <p>
                    &#x2713; Synchronous condensers are synchronous motors that are overexcited and operate without any load. A capacitor-like behavior occurs in the overexcited synchronous motor, which absorbs the leading current.
                </p>
                <br>
                <p>
                    &#x2713; When a synchronous condenser is connected across the power source and draws leading current, it partially or completely makes up for the lagging reactive components of the load current and raises the power factor.</p>
                 </div>`;

        } else if (usercount === 4) {

            tip = `<div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option A: Add a capacitor bank (capacitors in parallel) with the connected motor or
                    lighting circuits. It may also be used at the equipment,
                    distribution board, or installation's starting point. </p>

                <br>
                <p>
                    &#x2713; Power factor correction, which usually comes in the form of capacitors, is used to neutralize the maximum amount
                    of the magnetizing current in order to minimize losses in the
                    distribution system and to lower the electricity cost.
                </p>
                <br>
                <p>
                    &#x2713; The leading current a capacitor produces balances
                    the lagging aspect of an inductive load. As a result, the system's power factor increases.</p>
                <br>
                <p>&#x2713; This technology aids in addressing the phase shift and power factor lag in an AC power source, improving the effectiveness of electrical energy transfer.</p>
                <br>
                <p>&#x2713; Typically, the correction would be placed on either the Main or Delta contactor circuits.</p>
                </div>

                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option B: Consider Static Var Generator (SVG)</p>
                <br>
                <p>
                    &#x2713; Due to the SVG's dynamic, 15ms, evaluation and correction on each phase, immunity to existing system harmonics, and capacity to rectify the growing phase imbalances, it was suggested as an alternative to a conventional capacitor-based PFC system.
                </p>
                <br>
                <p>
                    &#x2713; Additionally, the SVG provides reactive compensation current that is infinitely variable without the use of contactor-connected stages of capacitors.</p>
                </div>


                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option C: Connect a Synchronous Condenser across as supply.</p>
                <br>
                <p>
                    &#x2713; Synchronous condensers are synchronous motors that are overexcited and operate without any load. A capacitor-like behavior occurs in the overexcited synchronous motor, which absorbs the leading current.
                </p>
                <br>
                <p>
                    &#x2713; When a synchronous condenser is connected across the power source and draws leading current, it partially or completely makes up for the lagging reactive components of the load current and raises the power factor.</p>
                 </div>


                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option D: Consider Adding a Phase Advancer or an AC Exciter</p>
                <br>
                <p>
                    &#x2713; The phase advancer is connected to the motor's rotor circuit and installed on the same shaft as the primary motor.
                </p>
                <br>
                <p>
                    &#x2713; The primary motor's shaft shares space with the phase advancer. The induction motor can be made to operate at a leading power factor, much like an overexcited synchronous motor, by delivering more ampere-turns from the phase advancer.</p>
                </div>`;

        } else if (usercount > 4) {
            tip = `
            <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option A: Add a capacitor bank (capacitors in parallel) with the connected motor or
                    lighting circuits. It may also be used at the equipment,
                    distribution board, or installation's starting point. </p>

                <br>
                <p>
                    &#x2713; Power factor correction, which usually comes in the form of capacitors, is used to neutralize the maximum amount
                    of the magnetizing current in order to minimize losses in the
                    distribution system and to lower the electricity cost.
                </p>
                <br>
                <p>
                    &#x2713; The leading current a capacitor produces balances
                    the lagging aspect of an inductive load. As a result, the system's power factor increases.</p>
                <br>
                <p>&#x2713; This technology aids in addressing the phase shift and power factor lag in an AC power source, improving the effectiveness of electrical energy transfer.</p>
                <br>
                <p>&#x2713; Typically, the correction would be placed on either the Main or Delta contactor circuits.</p>
                </div>

                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option B: Consider Static Var Generator (SVG)</p>
                <br>
                <p>
                    &#x2713; Due to the SVG's dynamic, 15ms, evaluation and correction on each phase, immunity to existing system harmonics, and capacity to rectify the growing phase imbalances, it was suggested as an alternative to a conventional capacitor-based PFC system.
                </p>
                <br>
                <p>
                    &#x2713; Additionally, the SVG provides reactive compensation current that is infinitely variable without the use of contactor-connected stages of capacitors.</p>
                </div>


                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option C: Connect a Synchronous Condenser across as supply.</p>
                <br>
                <p>
                    &#x2713; Synchronous condensers are synchronous motors that are overexcited and operate without any load. A capacitor-like behavior occurs in the overexcited synchronous motor, which absorbs the leading current.
                </p>
                <br>
                <p>
                    &#x2713; When a synchronous condenser is connected across the power source and draws leading current, it partially or completely makes up for the lagging reactive components of the load current and raises the power factor.</p>
                 </div>


                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                <p class="font-bold">Option D: Consider Adding a Phase Advancer or an AC Exciter</p>
                <br>
                <p>
                    &#x2713; The phase advancer is connected to the motor's rotor circuit and installed on the same shaft as the primary motor.
                </p>
                <br>
                <p>
                    &#x2713; The primary motor's shaft shares space with the phase advancer. The induction motor can be made to operate at a leading power factor, much like an overexcited synchronous motor, by delivering more ampere-turns from the phase advancer.</p>
                </div>

                <div class="gap-2 mt-2 sm:text-lg text-md mb-5">
                    <p class="font-bold">Option E: Active Power Filter</p>
                    <br>
                    <p>
                        &#x2713; By generating current components that cancel out harmonic distortion in the system, these filters can fix problems with the power factor.
                    </p>
                    <br>
                    <p>
                        &#x2713; In order to eliminate the harmonic content in the AC system and fix the power factor, the filter creates currents in the connection point. Since only the active fundamental component of the load current is carried by the AC distribution system, the connection point, Vcc, receives a nearly sinusoidal voltage.
                        </p>
                </div>
            `;
        }
        console.log(usercount);

        var tipsContainer = document.getElementById("tips-container");
        tipsContainer.innerHTML += tip;
    </script>

    <script>
        var PFOutputData = {!! json_encode($PFOutputFinal) !!};
    </script>

    <script src="{{ asset('js/view-powerquality_chart.js') }}"></script>
@endsection
