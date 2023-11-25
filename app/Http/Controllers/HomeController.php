<?php

namespace App\Http\Controllers;

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
        return view('home');
    }


    public function aboutus()
    {
        return view('aboutus');
    }


    public function allbuildings()
    {
        return view('allbuildings');
    }


    public function showbuilding()
    {
        return view('showbuilding');
    }


    public function allhalls()
    {
        return view('allhalls');
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
