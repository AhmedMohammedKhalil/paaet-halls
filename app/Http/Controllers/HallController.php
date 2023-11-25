<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallController extends Controller
{

    public function index() {
        return view('supervisors.halls.index');
    }

    public function create() {
        return view('supervisors.halls.create');

    }


    public function edit() {
        return view('supervisors.halls.edit');

    }


    public function show() {
        return view('supervisors.halls.show');

    }

    public function editImage() {

    }

    public function delete() {

    }

    public function deleteImage() {
    }


    public function allbooking() {
    }

}
