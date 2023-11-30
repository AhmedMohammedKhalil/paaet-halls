<?php

namespace App\Http\Livewire;

use App\Models\Building;
use Livewire\Component;

class SearchBuilding extends Component
{

    public $search;
    public $initalbuildings;
    public $buildings;
    public function mount($buildings) {
        $this->initalbuildings = $buildings;
    }

    public function search() {
        if($this->search == '')
            $this->buildings = Building::all();
        else {
                $buildings = Building::where('title','like','%'.$this->search.'%')
                                        ->orWhere('details','like','%'.$this->search.'%')->distinct()->get();
                $this->buildings = $buildings;

        }
        $this->emitTo(searchingBuilding::class,'showBuildings',$this->buildings);
    }

    public function render()
    {
        return view('livewire.search-building');
    }
}
