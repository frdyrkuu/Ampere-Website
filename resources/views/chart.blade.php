@extends('layouts.homepage')

@section('content')
    <section class="px-8 mb-20">
        {{-- CARD CHART --}}
        <h1 class="text-orange-500 text-left text-4xl py-4 font-bold">Chart</h1>

        <div class="w-full md:w-1/2">
            <form id="chartForm" method="POST" action="/chart" class="flex gap-4">
                @csrf
                <div>
                    <label for="small" class="block mb-2 text-sm font-medium text-gray-900">Circuit Number</label>
                    <select id="small" onchange="submitForm()"
                        class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        name="circuitNumber">
                        <option value=""selected>Choose Circuit Breaker Number</option>
                        <option value="1">Circuit Breaker Number 1</option>
                        <option value="2">Circuit Breaker Number 2</option>
                        <option value="3">Circuit Breaker Number 3</option>
                        <option value="4">Circuit Breaker Number 4</option>
                        <option value="5">Circuit Breaker Number 5</option>
                    </select>
                </div>
            </form>
            <script>
                function submitForm() {
                    document.getElementById('chartForm').submit();
                }
            </script>

            <div class="py-2 italic text-gray-700">
                <h1>Showing the results from <span class="font-bold"> Circuit Number {{ $cktnumber }}</span></h1>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 justify-center">
            <div class="bg-white rounded-lg shadow-sm p-4">
                <!-- Card content for column 1 -->
                <canvas id="lineChart_AmpereTrip"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4">
                <!-- Card content for column 2 -->
                <canvas id="lineChart_AmpacityConductors"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4">
                <!-- Card content for column 3 -->
                <canvas id="lineChart_VoltageDrop"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4">
                <!-- Card content for column 4 -->
                <canvas id="lineChart_PowerQuality"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4">
                <!-- Card content for column 5 -->
                <canvas id="lineChart_EnergyConservation"></canvas>
            </div>
        </div>


    </section>

    <script>
        var ampereTripOutputData = {!! json_encode($AmpereTripOutput) !!};
        var ampacityOutputData = {!! json_encode($AmpacityOutput) !!};
        var VDOutputData = {!! json_encode($VDOutput) !!};
        var PFOutputData = {!! json_encode($PFOutput) !!};
        var ECOutputData = {!! json_encode($ECOutput) !!};
    </script>

    <script src="{{ asset('js/chart.js') }}"></script>
@endsection
