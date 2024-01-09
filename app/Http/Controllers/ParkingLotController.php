<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingLot;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;

class ParkingLotController extends Controller
{
    public function index() {
        $parkingLot = ParkingLot::where('user_id', Auth::user()->id)->get();

        return view('lots.index')->with('parkingLotList', $parkingLot);
    }
    public function create() {
        $place = Place::all();
        return view('lots.create')->with('placeList', $place);
    }
    public function store(Request $request) {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        ParkingLot::create($data);
        return to_route('lots.index');
    }
}
