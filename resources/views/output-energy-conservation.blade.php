@extends('layouts.outputlayout')

@section('content')
    <div class="text-center mt-10">
        <p>Type of Duration: {{ $selectedTime }}</p>
        @foreach ($inputData as $data)
            <p>Appliance Name: {{ $data['applianceName'] }}</p>
            <p>Appliance Wattage: {{ $data['appWatts'] }}</p>
            <p>Number of Appliances: {{ $data['numberAppliance'] }}</p>
            <p>Number of Durations: {{ $data['numberDuration'] }}</p>
            <p>kWh: {{ $data['kWh'] }}</p>
            <br>
        @endforeach
        <p>Total kWh: {{ $totalkWh }}</p>
    </div>
@endsection
