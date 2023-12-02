<?php

namespace App\Http\Livewire;

use App\Models\Hall;
use App\Models\Service;
use App\Rules\NoFridayAndSaturday;
use Livewire\Component;

class Search extends Component
{
    public $search,$booking_id,$start_at,$end_at,$gender,$capacity,$services,$servicesModel,$capacities;
    public $initalhalls;
    public $halls;


    public function mount($capacities,$booking_id) {
        $this->booking_id = $booking_id;
        $this->servicesModel = Service::all();
        $this->capacities = $capacities;
        $this->gender = 'بنين';
        $this->capacity = $this->capacities[0];
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'after_or_equal' => 'يجب ان يكون الوقت بعد الثامنة صباحا وفى نفس اليوم',
        'befor_or_equal' => 'يجب ان يكون الوقت قبل العاشرة مساءا وفى نفس اليوم',
        'after' => 'يجب ان يكون وقت نهاية الحجز اكبر من بداية الحجز'
    ];

    protected $rules = [
        'gender' => ['required', 'string'],
        'capacity' => ['required', 'string'],
        'services' => ['required'],
        'start_at' => ['required'],
        'end_at' => ['required'],

    ];

    public function search() {
        $startDate = date('Y-m-d',strtotime($this->start_at));
        $endDate = date('Y-m-d',strtotime($this->end_at));
        $startTime = date('H:i:s',strtotime($this->start_at));
        $endTime = date('H:i:s',strtotime($this->end_at));
        $start_at = $this->start_at;
        $end_at = $this->end_at;
        $services = $this->services;

        $validatedData = $this->validate(
            array_merge($this->rules, [
                'start_at' => [
                    'required',
                    'after_or_equal:' . date('Y-m-d H:i:s', strtotime($startDate." 08:00:00")),
                    'before_or_equal:' . date('Y-m-d H:i:s', strtotime($startDate." 22:00:00")),
                    new NoFridayAndSaturday
                ],
                'end_at' => [
                    'required',
                    'after_or_equal:' . date('Y-m-d H:i:s', strtotime($startDate." 08:00:00")),
                    'before_or_equal:' . date('Y-m-d H:i:s', strtotime($startDate." 22:00:00")),
                    'after:start_at', new NoFridayAndSaturday
                ],
            ])
        );

        $halls = Hall::where('capacity',$this->capacity)
                                        ->where('gender',$this->gender);

        $availableHalls = $halls->whereDoesntHave('reserves', function ($query) use ($start_at, $end_at) {
            $query->where(function ($subQuery) use ($start_at, $end_at) {
                $subQuery->where('start_at', '<', $end_at)
                            ->where('end_at', '>', $start_at);
            });
        })->get();

        $this->halls = $availableHalls->filter(function ($hall) use ($services) {
            return $hall->services->pluck('id')->intersect($services)->count() === count($services);
        });

        $this->emitTo(searching::class,'showHalls',$this->halls,$start_at,$end_at,$this->booking_id);
    }
    public function render()
    {
        return view('livewire.search');
    }
}
