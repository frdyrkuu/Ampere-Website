@extends('layouts.inputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <section class="xl:mt-20">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-orange-500 flex items-center mb-6 text-2xl font-bold">
                        <img class="w-24 mx-auto" src="image/ampere-trip.png" alt="logo">
                    </h1>
                    <h1 class="text-orange-500 text-xl font-bold leading-tight tracking-tight md:text-2xl">
                        Ampere Trip
                    </h1>
                    <p class="text-center">Ampere Trip [AT] it is the current set to
                        trip the circuit [usually from 60% up to 100% of the AF]
                    </p>
                    {{-- FORM HERE --}}
                    {{-- <form method="POST" class="space-y-4 md:space-y-6" action=""> --}}
                    @csrf

                    {{-- AMPERE TRIP  --}}




                    </form>
                    {{-- END FORM --}}
                </div>
            </div>
        </div>
    </section>
@endsection
