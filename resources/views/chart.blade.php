@extends('layouts.homepage')

@section('content')
    <section class="px-8">
        {{-- CARD CHART --}}
        <h1 class="text-orange-500 text-left sm:text-center text-4xl py-4 font-bold">Chart</h1>
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

    <section class="max-w-7xl mx-auto mt-10 mb-20 sm:px-2 px-4">
        <h1 class="text-orange-500 text-center text-4xl py-4 font-bold">User Data</h1>
        <div class="relative overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-yellow-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Circuit Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Output
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userData as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->category }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->ckt }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->output }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="flex justify-center items-center">
            <p class="p-2 mt-20">
                {{ $userData->links() }}
            </p>
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
