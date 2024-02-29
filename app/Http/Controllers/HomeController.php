<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleTypes;
use App\Models\Brands;
use App\Models\Models;
use Illuminate\Database\Eloquent\Model;

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
        return view('dashboard');
    }

    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $vehicleType = VehicleTypes::all();
        $vehicleBrand = Brands::all();
        $vehicleModel = Models::all();

        return view('admin/dashboard', [
            'vehicleType' => $vehicleType,
            'vehicleBrand' => $vehicleBrand,
            'vehicleModel' => $vehicleModel,
        ]);
    }
}
