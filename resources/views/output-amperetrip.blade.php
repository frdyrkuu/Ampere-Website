@extends('layouts.outputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <h1 class="text-center mt-5">OUTPUT AMPERE TRIP</h1>
    <br>
    <div class="text-center">
        <p>Circuit Number: {{ $circuitNumber }}</p>
        <p>Ampere Trip: {{ $ampereTrip }}</p>
        <p>Real Current: {{ $realCurrent }}</p>
        <p>Ampere Trip Rating: {{ $ampereTrip_Results }}</p>
        <p>Percentage: {{ $percentage }}%</p>
    </div>
@endsection
