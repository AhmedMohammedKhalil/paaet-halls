<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('admins.services.index',compact('services'));

    }

    public function create() {
        return view('admins.services.create');
    }


    public function edit(Request $r) {

        return view('admins.services.edit',['service_id'=>$r->id]);
    }


    public function delete(Request $r) {
        Service::whereId($r->id)->delete();
        return redirect()->route('admin.service.index');
    }



}
