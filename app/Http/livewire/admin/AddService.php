<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AddService extends Component
{
    public $name;

    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',

    ];

    public function add() {
        $validatedData = $this->validate();
        Service::create($validatedData);
        session()->flash('message', "Service Added Successfully.");
        return redirect()->route('admin.service.index');
    }
    public function render()
    {
        return view('livewire.admin.add-service');
    }
}
