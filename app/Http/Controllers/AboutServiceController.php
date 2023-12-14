<?php

namespace App\Http\Controllers;

use App\Models\AboutService;
use Illuminate\Http\Request;

class AboutServiceController extends Controller
{
    public function index()
    {
        return view('admins.about-services.index',['aboutservices'=>AboutService::all()]);
    }



    public function create()
    {
        return view('admins.about-services.create');
    }

    public function edit(Request $r)
    {
        return view('admins.about-services.edit',['aboutservice_id'=>$r->id]);
    }


    public function delete(Request $r)
    {
       AboutService::whereId($r->id)->delete();
       return redirect()->route('admin.about-service.index');
    }
}
