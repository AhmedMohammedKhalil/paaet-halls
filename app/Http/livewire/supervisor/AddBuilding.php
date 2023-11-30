<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Building;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;



class AddBuilding extends Component
{

    use WithFileUploads;
    public $title, $details,$address,$image,$supervisor_id;


    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',

    ];

    protected $rules = [
        'title' => ['required', 'string', 'max:50'],
        'address' => ['required', 'string', 'max:50'],
        'details' => ['required', 'max:255'],
        'supervisor_id' => ['required'],
        'image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']
    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }

    public function add()
    {   $this->supervisor_id=auth('supervisor')->user()->id;
        $validatedata = $this->validate();
        $imagename = $this->image->getClientOriginalName();
        $building = Building::create(array_merge($validatedata, ['image' => $imagename]));
        $dir = public_path('assets/images/buildings/' . $building->id);
        if (file_exists($dir))
            File::deleteDirectories($dir);
        else
            mkdir($dir);
        $this->image->storeAs('images/buildings/' . $building->id, $imagename);
        File::deleteDirectory(public_path('assets/images/livewire-tmp'));

        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('supervisor.building.index');
    }
    public function render()
    {
        return view('livewire.supervisor.add-building');
    }
}
