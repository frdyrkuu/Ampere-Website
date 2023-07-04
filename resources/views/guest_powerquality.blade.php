@extends('layouts.guest_layout-input')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <section class="xl:mt-20">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-orange-500 flex items-center mb-6 text-2xl font-bold">
                        <img class="w-24 mx-auto" src="/image/power-quality.png" alt="logo">
                    </h1>
                    <h1 class="text-orange-500 text-xl font-bold leading-tight tracking-tight md:text-2xl">
                        Power Quality
                    </h1>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Velit, iure.
                    </p>
                    {{-- FORM HERE --}}
                    <form method="POST" class="space-y-4 md:space-y-6" action="/power-quality/results/guest">
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

                        {{-- POWER QUALITY --}}
                        <br>
                        @if ($errors->has('error'))
                            <div class="text-red-500 text-xs font-semibold alert alert-danger">
                                {{ $errors->first('error') }}
                            </div>
                        @endif
                        <p class="text-sm text-orange-500">Note: Values can be seen on SCB's Display</p>
                        <div class="mt-4 relative h-11 w-full min-w-[200px]">
                            <input name="powerQuality"
                                class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" " type="number" step="0.001" title="Value can be seen on SCB's display"
                                required />

                            <label
                                class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Power Quality [p.f]
                            </label>
                        </div>
                        <br>

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
@endsection
