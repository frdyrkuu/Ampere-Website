<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\UserData;
use Carbon\Carbon;

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

        $validator->after(function ($validator) use ($request) {
            $ampereTrip = $request->input('ampereTrip');
            $realCurrent = $request->input('realCurrent');

            if ($ampereTrip == 0 || $realCurrent == 0) {
                $validator->errors()->add('error', 'An Error occured.');
            }
        });

        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            return redirect('amperetrip')->withErrors($validator);
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
        $ampereTripCategory = "Ampere Trip";
        $ampereTrip_Results = $real_current / $ampere_trip;
        $percentage = $ampereTrip_Results * 100;
        $ampereTrip_Results = sprintf("%.3f", $percentage);

        // SAVE TO DATABASE USING FOREIGN KEY

        if ($ampere_trip <= 0 || $real_current <= 0) {
            return redirect('amperetrip')->withErrors(['error' => 'Negative numbers are not allowed.']);
        } else {
            $userId = auth()->user()->id;

            // Data doesn't exist, save to the database
            $userData = new UserData();
            $userData->user_id = $userId;
            $userData->category = $ampereTripCategory;
            $userData->ckt = $circuit_Number;
            $userData->output = $ampereTrip_Results;
            $userData->save();
        }


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
            return redirect('ampacity-of-conductors');
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

        $ampacityCategory = "Ampacity of Conductors";
        $ampacity = $real_current / ($no_current * $number_sets);
        $percentage = $ampacity * 100;
        $ampacityResult = sprintf("%.3f", $percentage);

        if ($real_current <= 0) {
            return redirect('ampacity-of-conductors')->withErrors(['error' => 'Real Current must be greater than 0']);
        } else {
            $userId = auth()->user()->id;

            // Data doesn't exist, save to the database
            $userData = new UserData();
            $userData->user_id = $userId;
            $userData->category = $ampacityCategory;
            $userData->ckt = $circuit_Number;
            $userData->output = $ampacityResult;
            $userData->save();
        }

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
            return redirect('percentage-of-voltage');
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

        if ($percentage < 0) {
            $percentage = 0;
        }

        $final_voltageDrop = sprintf("%.3f", $percentage);
        $voltageDropCategory = "Voltage Drop";
        $today = Carbon::today();

        // SAVE TO DATABASE USING FOREIGN KEY
        if ($real_voltage <= 0) {
            return redirect('percentage-of-voltage')->withErrors(['error' => 'Real Current must be greater than 0']);
        } else {
            $userId = auth()->user()->id;

            // Check if the data already exists in the database
            $existingData = UserData::where('user_id', $userId)
                ->where('created_at', $today)
                ->where('output', $final_voltageDrop)
                ->first();

            if ($existingData) {
                // Data already exists, no need to save again
                $userData = $existingData;
            } else {
                // Data doesn't exist, save to the database
                $userData = new UserData();
                $userData->user_id = $userId;
                $userData->category = $voltageDropCategory;
                $userData->ckt = $circuit_Number;
                $userData->output = $final_voltageDrop;
                $userData->save();
            }
        }

        return view('output-voltage-drop', [
            'circuitNumber' => $circuit_Number,
            'realVoltage' => $real_voltage,
            'voltage' => $voltage,
            'percentage' => $final_voltageDrop,
        ]);
    }

    // FUNCTION FOR POWER QUALITY
    public function powerQuality(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'circuitNumber' => 'required',
            'powerQuality' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('power-quality');
        }

        $circuit_Number = $request->input('circuitNumber');
        $power_quality = $request->input('powerQuality');
        $condition = '';
        $powerQualityCategory = "Power Quality";

        if ($power_quality >= 0.010 && $power_quality <= 0.840) {
            $condition = 'Voltage Sag';
        } elseif ($power_quality >= 0.850 && $power_quality <= 1.000) {
            $condition = 'Safe Condition';
        } elseif ($power_quality >= 1.010 && $power_quality <= 1.990) {
            $condition = 'Voltage Swell';
        } else {
            $condition = 'Unknown Condition';
        }

        if ($power_quality >= 2) {
            return redirect('power-quality')->withErrors(['error' => 'Power quality must not be greater than 2']);
        } else {
            if ($power_quality <= 0) {
                return redirect('power-quality')->withErrors(['error' => 'Power quality must not be equal to 0']);
            } else {
                if ($condition == "Unknown Condition") {
                    return view('output-power-quality', [
                        'circuitNumber' => $circuit_Number,
                        'powerQuality' => $power_quality,
                        'condition' => $condition,
                        'PFOutputFinal' => [], // Initialize the variable here
                    ]);
                } else {
                    $userId = auth()->user()->id;
                    $existingData = UserData::where('user_id', $userId)
                        ->where('created_at',)
                        ->where('output', $power_quality)
                        ->first();

                    if ($existingData) {
                        $userData = $existingData;
                    } else {
                        $userData = new UserData();
                        $userData->user_id = $userId;
                        $userData->category = $powerQualityCategory;
                        $userData->ckt = $circuit_Number;
                        $userData->output = $power_quality;
                        $userData->save();
                    }
                }
            }

            $userId = auth()->user()->id;
            $PFOutput = UserData::where('user_id', $userId)
                ->where('category', "Power Quality")
                ->where('ckt', $circuit_Number)
                ->pluck('output');

            $PFOutputFinal = $PFOutput->toArray();

            $userCountData = count($PFOutputFinal);
        }


        return view('output-power-quality', [
            'circuitNumber' => $circuit_Number,
            'powerQuality' => $power_quality,
            'condition' => $condition,
            'PFOutputFinal' => $PFOutputFinal,
            'usercountdata' => $userCountData,
        ]);
    }


    // FUNCTION FOR ENERGY CONSERVATION
    public function energyConservation(Request $request)
    {
        // ADD FUNCTION HERE
        // JQUERY
        $applianceNames = $request->input('applianceName');
        $applianceWatts = $request->input('appWatts');
        $numberAppliances = $request->input('numberAppliance');
        $numberDurations = $request->input('numberDuration');
        $selectedDuration = $request->input('selectedTime');

        if ($applianceNames === null || $numberAppliances === null || $numberDurations === null) {
            return  redirect('energy-conservation');
        }

        // Validator
        $validator = Validator::make($request->all(), [
            'applianceName.*' => 'required',
            'numberAppliance.*' => 'required|numeric',
            'numberDuration.*' => 'required|numeric',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return  redirect('energy-conservation');
        }

        $inputData = [];

        // Combine the values into a single array
        for ($i = 0; $i < count($applianceNames); $i++) {
            $appWatts = $applianceWatts[$i];
            $numberAppliance = $numberAppliances[$i];
            $numberDuration = $numberDurations[$i];

            if ($selectedDuration === 'Dailies') {
                $kWh = ($appWatts * $numberAppliance * $numberDuration) / 1000;
            } elseif ($selectedDuration === 'Monthly') {
                $kWh = ($appWatts * $numberAppliance * $numberDuration * 30) / 1000;
            } else {
                $kWh = 0;
            }


            $inputData[] = [
                'applianceName' => $applianceNames[$i],
                'appWatts' => $appWatts,
                'numberAppliance' => $numberAppliance,
                'numberDuration' => $numberDuration,
                'kWh' => $kWh,
            ];

            if ($appWatts <= 0 || $numberAppliance <= 0 || $numberDuration <= 0) {
                return redirect('energy-conservation')->withErrors(['error' => 'An error occurred.']);
            }
        }


        $totalkWh = 0; // Initialize total number of appliances variable

        foreach ($inputData as $row) {
            $totalkWh += $row['kWh'];
        }

        $today = Carbon::today();
        $energyConservationCategory = "Energy Conservation";

        $userId = auth()->user()->id;

        // Check if the data already exists in the database
        $existingData = UserData::where('user_id', $userId)
            ->where('created_at', $today)
            ->where('output', $totalkWh)
            ->first();

        if ($existingData) {
            // Data already exists, no need to save again
            $userData = $existingData;
        } else {
            // Data doesn't exist, save to the database
            $userData = new UserData();
            $userData->user_id = $userId;
            $userData->category = $energyConservationCategory;
            $userData->ckt = 0;
            $userData->output = $totalkWh;
            $userData->save();
        }


        // Process the input data as needed
        return view('output-energy-conservation', [
            'inputData' => $inputData,
            'selectedTime' => $selectedDuration,
            'totalkWh' => $totalkWh,
        ]);
    }


    // SHOW FOR THE CHART LIST DATA
    public function showUserData(Request $request)
    {
        $userId = auth()->user()->id;

        $userData = UserData::where('user_id', $userId)
            ->orderByDesc('category')
            ->paginate(5);

        $cktValues = 1; // Initial value of cktValues

        if ($request->has('circuitNumber')) {
            $cktValues = $request->input('circuitNumber');
        }

        $AmpereTripOutput = UserData::where('user_id', $userId)
            ->where('category', 'Ampere Trip')
            ->where('ckt', $cktValues)
            ->pluck('output');

        $AmpereTripOutputFinal = $AmpereTripOutput->toArray();


        // AMPACITY DATA TO ARRAY
        $AmpacityOutput = UserData::where('user_id', $userId)
            ->where('category', "Ampacity of Conductors")
            ->where('ckt', $cktValues)
            ->pluck('output');

        $AmpacityOutputFinal = $AmpacityOutput->toArray();

        // VOLTAGE DROP
        $VDOutput = UserData::where('user_id', $userId)
            ->where('category', "Voltage Drop")
            ->where('ckt', $cktValues)
            ->pluck('output');

        $VDOutputFinal = $VDOutput->toArray();


        // Power Quality
        $PFOutput = UserData::where('user_id', $userId)
            ->where('category', "Power Quality")
            ->where('ckt', $cktValues)
            ->pluck('output');

        $PFOutputFinal = $PFOutput->toArray();


        // Energy Conservation
        $ECOutput = UserData::where('user_id', $userId)
            ->where('category', "Energy Conservation")
            ->where('ckt', $cktValues)
            ->pluck('output');

        $ECOutputFinal = $ECOutput->toArray();

        return view('chart', [
            'userData' => $userData,
            'AmpereTripOutput' => $AmpereTripOutputFinal,
            'AmpacityOutput' => $AmpacityOutputFinal,
            'VDOutput' => $VDOutputFinal,
            'PFOutput' => $PFOutputFinal,
            'ECOutput' => $ECOutputFinal,
            'cktnumber' => $cktValues,
        ]);
    }
}
