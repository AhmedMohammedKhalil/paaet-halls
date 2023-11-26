<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Hall;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buildings = Building::limit(10)->get();  
        $halls = Hall::limit(10)->get();
        return view('home',compact('buildings','halls'));
    }


    public function aboutus()
    {
        return view('aboutus');
    }


    public function allbuildings()
    {
        $buildings = Building::all();  
        return view('allbuildings',compact('buildings'));
    }


    public function showbuilding()
    {
        return view('showbuilding');
    }


    public function allhalls()
    {
        $halls = Hall::all();
        return view('allhalls',compact('halls'));
    }


    public function showhall()
    {
        return view('showhall');
    }


    public function search()
    {
        return view('search');
    }


}
