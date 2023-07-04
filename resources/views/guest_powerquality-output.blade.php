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
            <article class="ml-0 lg:ml-20 md:w-full mt-10 ">
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
                </div>
            </article>
            <div class="w-1/2 sm:w-full h-full animate-reveal mb-5">
                {{-- <img class="w-9/12 m-auto sm:m-none object-cover animate-floating" src="/image/picture.png" alt="burger"> --}}

                <div class="p-4">
                    <!-- Card content for column 4 -->
                    <img src="/image/picture.png" alt="">
                </div>
            </div>

        </div>

    </section>

    <section class="max-w-7xl mx-auto p-6">
        <h2 class="text-gray-700 text-2xl font-semibold">Why are we correcting poor power factor?</h2>
        <div class="gap-2 mt-2 sm:text-lg text-md">
            <p>Poor power factor can result in voltage drops and power losses,
                which can lead to motor failure and overheating.</p>

            <br>
            <p>
                An electrical load with a poor power factor consumes more current than a higher power factor to transfer the
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
            <p class="py-2">&#x2713; Reduced power consumption as a result of improved energy efficiency will result in
                lower greenhouse gas emissions and less fossil fuel depletion by power plants. </p>

        </div>

    </section>
@endsection
