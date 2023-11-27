<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Building;

class SearchingBuilding extends Component
{

    public $buildings;
    public $flag = false;

    protected $listeners = [
        'showBuildings',
    ];
    public function showBuildings($buildings) {
        $this->flag = true;
        if($buildings) {
            $ids = [];
            foreach($buildings as $building) {
                $ids[] = $building['id'];
            }
            $this->buildings = Building::find($ids);
        } else {
            $this->buildings = '';
        }

    }

    public function render()
    {
        $this->buildings = $this->flag == true ? $this->buildings : Building::all();
        return view('livewire.searching-building');
    }
}
