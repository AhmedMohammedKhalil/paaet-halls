<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Building;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditBuilding extends Component
{
    use WithFileUploads;
    public $title, $address,$details,$image,$building;


    public function mount($building)
    {
        $this->building = $building;
        $this->title = $building->title;
        $this->address = $building->address;
        $this->details = $building->details;

    }
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا'
    ];

    protected $rules = [
        'title' => ['required', 'string', 'max:50'],
        'details' => ['required', 'string', 'max:50'],
        'address' => ['required', 'max:255'],
    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }
    public function edit()
    {
        $validatedata = $this->validate();
        if (!$this->image)
            $this->building->update($validatedata);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->building->update(array_merge($validatedata, ['image' => $imagename]));
            $dir = public_path('assets/images/buildings/' . $this->building->id);
            if (file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs('images/buildings/' . $this->building->id, $imagename);
            File::deleteDirectory(public_path('assets/images/livewire-tmp'));
        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('supervisor.building.index');
    }
    public function render()
    {
        return view('livewire.supervisor.edit-building');
    }
}
