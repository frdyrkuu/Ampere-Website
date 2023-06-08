<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS FOR THE CONVERSION / FORMULA
    |--------------------------------------------------------------------------
    */

    // FUNCTION FOR AMPERE TRIP
    public function amperetrip(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'circuitNumber' => 'required',
            'ampereTrip' => 'required',
            'realCurrent' => 'required',
        ]);

        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            abort(403, 'Forbidden');
        }

        // If validation passes, process the inputs and return the view
        $circuit_Number = $request->input('circuitNumber');
        $ampere_trip = $request->input('ampereTrip');
        $real_current = $request->input('realCurrent');


        /*
        |--------------------------------------------------------------------------
        | CALCULATION CONVERSION / FORMULA
        | AT = (Load Flowing (Real current))/(Ampere Trip Rating of the Circuit Breaker)
        |--------------------------------------------------------------------------
        */

        $ampereTrip_Results = $real_current / $ampere_trip * 100;
        $percentage = number_format($ampereTrip_Results, 3);

        return view('output-amperetrip', [
            'circuitNumber' => $circuit_Number,
            'ampereTrip' => $ampere_trip,
            'realCurrent' => $real_current,
            'ampereTrip_Results' =>  $ampereTrip_Results,
            'percentage' => $percentage,
        ]);
    }

    // FUNCTION FOR AMPACITY OF CONDUCTORS
    public function ampacityConductors(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'circuitNumber' => 'required',
            'realCurrent' => 'required',
            'conductorType' => 'required',
            'wireSize' => 'required',
            'wireType' => 'required',
            'ambientTemp' => 'required',
            'noCurrent' => 'required',
            'numberSets' => 'required',
        ]);

        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            abort(403, 'Forbidden');
        }

        // ADD FUNCTION HERE
        $circuit_Number = $request->input('circuitNumber');
        $real_current = $request->input('realCurrent');
        $conductor_type = $request->input('conductorType');
        $wire_size = $request->input('wireSize');
        $wire_type = $request->input('wireType');
        $ambient_temp = $request->input('ambientTemp');
        $no_current = $request->input('noCurrent');
        $number_sets = $request->input('numberSets');

        /*
        |--------------------------------------------------------------------------
        | CALCULATION CONVERSION / FORMULA
        | Ampacity = (Load Flowing (real current))/(Wire size of the conductor used x number of sets)
        |--------------------------------------------------------------------------
        */
        $ampacity = $real_current / ($no_current * $number_sets);
        $percentage = number_format($ampacity * 100, 3);

        return view('output-ampacity-conductors', [
            'circuitNumber' =>  $circuit_Number,
            'realCurrent' =>  $real_current,
            'conductorType' =>  $conductor_type,
            'wireSize' =>   $wire_size,
            'wireType' =>   $wire_type,
            'ambientTemp' => $ambient_temp,
            'noCurrent' => $no_current,
            'numberSet' => $number_sets,
            'ampacity' => $ampacity,
            'percentage' => $percentage,
        ]);
    }

    // FUNCTION FOR PERCENTAGE VOLTAGE
    public function percentageVoltage(Request $request)
    {
        // ADD FUNCTION HERE
        $validator = Validator::make($request->all(), [
            'circuitNumber' => 'required',
            'realVoltage' => 'required',
            'voltage' => 'required',
        ]);

        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            abort(403, 'Forbidden');
        }


        $circuit_Number = $request->input('circuitNumber');
        $real_voltage = $request->input('realVoltage');
        $voltage = $request->input('voltage');

         /*
        |--------------------------------------------------------------------------
        | CALCULATION CONVERSION / FORMULA
        | Percentage of Voltage Drop [1-((Real Voltage)/(240 or 230 or 220))]x 100
        |--------------------------------------------------------------------------
        */

        // Calculate the percentage
        $percentage = (1 - ($real_voltage / $voltage)) * 100;
        $absoluteValue = abs($percentage);
        $final_voltageDrop = number_format($absoluteValue, 3);


        return view('output-voltage-drop', [
            'circuitNumber' => $circuit_Number,
            'realVoltage' => $real_voltage,
            'voltage' => $voltage,
            'percentage' => $final_voltageDrop,
        ]);
    }

    // FUNCTION FOR POWER QUALITY
    public function powerQuality()
    {
        // ADD FUNCTION HERE

    }

    // FUNCTION FOR ENERGY CONSERVATION
    public function energyConservation()
    {
        // ADD FUNCTION HERE

    }
}
