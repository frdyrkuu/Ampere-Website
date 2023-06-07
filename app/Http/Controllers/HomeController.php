<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function amperetrip()
    {

        // ADD FUNCTION HERE
    }

    // FUNCTION FOR AMPACITY OF CONDUCTORS
    public function ampacityConductors()
    {
        // ADD FUNCTION HERE

    }

    // FUNCTION FOR PERCENTAGE VOLTAGE
    public function percentageVoltage()
    {
        // ADD FUNCTION HERE

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
