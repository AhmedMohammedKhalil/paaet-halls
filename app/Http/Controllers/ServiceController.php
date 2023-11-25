<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('admins.services.index');

    }

    public function create() {
        return view('admins.services.create');
    }


    public function edit() {
        return view('admins.services.edit');
    }


    public function delete() {
        return view('admins.services.delete');
    }



}
