<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\District;
use App\Models\City;

class StateDistrictCityController extends Controller
{
    public function index() {
        $states = State::all();
        return $states;
    }

    public function district($id) {
        $districts = District::where('state_id', $id)->get();
        return $districts;
    }

    public function city($id) {
        $cities = City::where('district_id', $id)->get();
        return $cities;
    }
}
