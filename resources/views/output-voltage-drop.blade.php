@extends('layouts.outputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <h1 class="text-center mt-5">OUTPUT PERCENTAGE OF VOLTAGE DROP</h1>
    <br>
    <div class="text-center">
        <p>Circuit Number: {{ $circuitNumber }}</p>
        <br>
        <p>Real Voltage: {{ $realVoltage }}</p>

        <p>Voltage: {{ $voltage }}</p>
        <p>Percentage: {{ $percentage }}%</p>
    </div>
@endsection
