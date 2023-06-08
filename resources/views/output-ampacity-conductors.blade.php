@extends('layouts.outputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <h1 class="text-center mt-5">OUTPUT AMPACITY OF CONDUCTORS</h1>
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


    </div>
@endsection
