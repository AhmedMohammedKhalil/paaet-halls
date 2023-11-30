<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Service;
use Livewire\Component;
use App\Models\Building;
use App\Models\Hall;

class EditHall extends Component
{

    public $details, $gender,$hall, $hall_id, $number,$buildings,$building_id, $supervisor_id, $capacities, $capacity, $cover, $video, $servicesModel, $services,$serviesArr, $images=[];

    public function mount($hall_id) {
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
        $this->hall = Hall::whereId($hall_id)->first();
        $this->hall_id = $hall_id;
        $this->number = $this->hall->number;
        $this->details = $this->hall->details;
        $this->gender = $this->hall->gender;
        $this->building_id = $this->hall->building_id;
        $this->capacity = $this->hall->capacity;
        $this->services = $this->hall->services;
        foreach($this->services as $s)
        {
            $this->serviesArr[] = $s->id;
        }

    }

    protected $rules = [
        'number' => ['required', 'max:50'],
        'gender' => ['required', 'string'],
        'capacity' => ['required', 'string'],
        'details' => ['required', 'max:255'],
        'supervisor_id' => ['required'],
        'building_id' => ['required'],
        'services' => ['required'],
    ];

    public function edit() {
    }

    public function render()
    {
        return view('livewire.supervisor.edit-hall');
    }
}
