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


    public function edit(Request $r) {

        return view('supervisors.halls.edit',['hall_id'=>$r->id]);

    }


    public function show(Request $r) {
        $hall = Hall::whereId($r->id)->first();
        $search = '';
        return view('supervisors.halls.show',compact('hall','search'));
    }

    public function showTable(Request $r) {
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


    public function editImage(Request $r) {
        return view('supervisors.halls.editImage',['image_id'=>$r->id]);
    }

    public function delete() {

    }

    public function deleteImage() {
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
