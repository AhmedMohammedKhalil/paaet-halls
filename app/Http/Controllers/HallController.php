<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Image;
use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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

    public function delete(Request $r) {
        $hall = Hall::whereId($r->id)->first();
        $hall->services()->detach();
        File::deleteDirectories(public_path("assets/images/halls/$hall->id"));
        File::deleteDirectory(public_path("assets/images/halls/$hall->id"));
        $collection = Image::where('hall_id', $hall->id)->get(['id']);
        Image::destroy($collection->toArray());
        Hall::whereId($hall->id)->delete();
        session()->flash('message', "Hall Deleted Succefully");
        return redirect()->route('supervisor.hall.index');
    }

    public function deleteImage(Request $r) {
        $image = Image::whereId($r->id)->first();
        $hall_id = $image->hall_id;
        File::deleteDirectories(public_path("assets/images/halls/$image->hall_id/images/$image->id"));
        File::deleteDirectory(public_path("assets/images/halls/$image->hall_id/images/$image->id"));
        $image->delete();
        session()->flash('message', "Image Deleted Succefully");
        return redirect()->route('supervisor.hall.show',['id'=>$hall_id]);

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
