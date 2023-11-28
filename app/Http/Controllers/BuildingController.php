<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index() {
        $buildings=auth('supervisor')->user()->buildings;
        return view('supervisors.buildings.index',compact('buildings'));
    }

    public function create() {
        return view('supervisors.buildings.create');
    }


    public function edit(Request $r) {
        $building = Building::whereId($r->id)->first();
        return view('supervisors.buildings.edit', compact('building'));
    }


    public function show(Request $r)
    {
        $building = Building::whereId($r->id)->first();
        return view('supervisors.buildings.show', compact('building'));
    }


    public function delete(Request $r) {
        Building::destroy($r->id);
        return redirect()->route('supervisor.building.index');
    }

}
