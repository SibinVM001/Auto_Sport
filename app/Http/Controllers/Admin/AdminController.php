<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleTypes;
use App\Models\Brands;
use App\Models\Models;
use App\Models\Vehicle;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vehicles = VehicleTypes::find(1)->vehicle()->get();
        // dd($vehicles);
        $vehicleType = VehicleTypes::all();
        // dd($vehicles->vehicle()->with('brand')->get());
        // $vehiclesList = [];
        // $vehicleType = VehicleTypes::find(1)->vehicle()->with('brand')->get();
        // foreach ($vehicles as $vehicle) {
        //     // var_dump($vehicle->vehicle());
        // }
        // dd($vehicleType[0]->brand);
        $vehicleBrand = Brands::all();
        $vehicleModel = Models::all();

        return view('admin/dashboard', [
            'vehicleType' => $vehicleType,
            'vehicleBrand' => $vehicleBrand,
            'vehicleModel' => $vehicleModel,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
