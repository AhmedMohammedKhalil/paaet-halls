<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Hall;
use App\Models\Reserve;
use App\Models\Service;
use Carbon\Carbon;
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
        $video = 'video.mp4';
        return view('home',compact('buildings','halls','video'));
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


    public function showbuilding(Request $r)
    {
        $building = Building::whereId($r->id)->first();
        $url = url()->previous();
        $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
        return view('showbuilding',compact('building','route','url'));
    }


    public function allhalls()
    {
        $halls = Hall::all();
        return view('allhalls',compact('halls'));
    }


    public function showhall(Request $r)
    {
        $hall = Hall::whereId($r->id)->first();
        $search = '';
        $url = url()->previous();
        $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
        return view('showhall',compact('hall','search','route','url'));
    }


    public function search(Request $r)
    {
        $halls = Hall::all();
        $services = Service::all();
        $capacities =[
            '0 - 50',
            '50 - 100',
            '100 - 150',
            '150 - 200',
            '200 - 250',
            '250 - 300',
            'اكبر من 300'
        ];
        $booking_id = isset($r->booking_id) ? $r->booking_id : null;
        return view('search',compact('halls','services','capacities','booking_id'));
    }



    public function searchShowhall(Request $r)
    {
        $hall = Hall::whereId($r->id)->first();
        $search = 'search';
        $url = url()->previous();
        $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
        $start_at = $r->start_at;
        $end_at = $r->end_at;
        $booking_id = $r->booking_id;
        return view('showhall',compact('hall','search','route','url','start_at','end_at','booking_id'));
    }


    public function showHallTable(Request $r)
    {

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
