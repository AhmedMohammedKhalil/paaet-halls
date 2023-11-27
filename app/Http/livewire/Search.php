<?php

namespace App\Http\Livewire;

use App\Models\Hall;
use Livewire\Component;

class Search extends Component
{
    public $search,$start_at,$end_at,$gender,$capacity,$services = [];
    public $initalhalls;
    public $halls;
    public function mount($halls) {
        $this->initalhalls = $halls;

    }

    public function search() {
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
