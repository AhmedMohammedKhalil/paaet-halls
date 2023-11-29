<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Building;
use App\Models\Service;
use Livewire\Component;

class AddHall extends Component
{
    public $details, $gender, $number,$buildings,$building_id, $supervisor_id, $capacities, $capacity, $cover, $video, $servicesModel, $services, $images;

    public function mount() {
        $this->servicesModel = Service::all();
        $this->capacities =[
            '0 - 50',
            '50 - 100',
            '100 - 150',
            '150 - 200',
            '200 - 250',
            '250 - 300',
            'اكبر من 300'
        ];
        $this->supervisor_id = auth('supervisor')->user()->id;
        $this->buildings = Building::whereId($this->supervisor_id)->get();
    }


    public function add(){

    }
    public function render()
    {
        return view('livewire.supervisor.add-hall');
    }
}
