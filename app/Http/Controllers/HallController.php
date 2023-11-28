<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Reserve;
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

    public function showHall(Request $r)
    {
        $hall = Hall::whereId($r->id)->first();
        $search = '';
        return view('admins.supervisors.showhall',compact('hall','search'));
    }

    public function professorShowHall(Request $r)
    {
        $hall = Hall::whereId($r->id)->first();
        $search = '';
        return view('admins.professors.showhall',compact('hall','search'));
    }

    public function showHallTable(Request $r) {
        $events = [];
        $HallReserves = Reserve::where('hall_id',$r->id)->get();
        foreach($HallReserves as $reserve) {
            $events[] = [
                'title' => $reserve->professor->name,
                'start' => $reserve->start_at,
                'end'=> $reserve->end_at,
                'backgroundColor' => '#62442e',
                'borderColor' => '#62442e'
            ];
        }
        return view('table',compact('events'));
    }

}
