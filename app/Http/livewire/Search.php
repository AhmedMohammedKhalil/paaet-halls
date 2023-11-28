<?php

namespace App\Http\Livewire;

use App\Models\Hall;
use Livewire\Component;

class Search extends Component
{
    public $search,$start_at,$end_at,$gender,$capacity,$services = [],$servicesModel,$capacities;
    public $initalhalls;
    public $halls;
    public function mount($halls,$services,$capacities) {
        $this->initalhalls = $halls;
        $this->servicesModel = $services;
        $this->capacities = $capacities;
    }

    public function search() {
        $startDate = date('Y-m-d',strtotime($this->start_at));
        $endDate = date('Y-m-d',strtotime($this->end_at));
        $startTime = date('H:i:s',strtotime($this->start_at));
        $endTime = date('H:i:s',strtotime($this->end_at));

        dd($this->start_at,$this->end_at,$startDate,$endDate,$startTime,$endTime);




        // if($this->search == '')
        //     $this->halls = Hall::all();
        // else {
        //         $halls = Hall::where('number','like','%'.$this->search.'%')
        //                             ->orWhere('details','like','%'.$this->search.'%')->distinct()->get();
        //         $this->halls = $halls;

        // }
        // $this->emitTo(searchingHall::class,'showHalls',$this->halls);
    }
    public function render()
    {
        $this->halls = Hall::all();
        return view('livewire.search');
    }
}
