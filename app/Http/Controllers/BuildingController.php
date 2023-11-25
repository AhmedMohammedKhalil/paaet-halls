<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index() {
        return view('supervisors.buildings.index');
    }

    public function create() {
        return view('supervisors.buildings.create');

    }


    public function edit() {
        return view('supervisors.buildings.edit');

    }


    public function show() {
        return view('supervisors.buildings.show');

    }


    public function delete() {

    }

}
