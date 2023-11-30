<?php

namespace App\Http\Livewire\Supervisor;

use Livewire\Component;
use App\Models\Hall;
use App\Models\Service;
use App\Models\Building;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditHallPhoto extends Component
{

    use WithFileUploads;
    public $image_id,$image,$imageModel;

    public function mount($image_id) {
        $this->imageModel = Image::find($image_id);
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
    ];

    protected $rules = [
        'image' => ['required','image', 'mimes:jpeg,jpg,png', 'max:2048']
    ];

    public function edit() {
        $validatedData=$this->validate();
        $imagename = $this->image->getClientOriginalName();
        $this->imageModel->update(array_merge($validatedData,['image'=>$imagename]));
        $path = '/images/halls/'.$this->imageModel->hall_id.'/images/'.$this->imageModel->id;
        $dir = public_path('assets'.$path);
            if(file_exists($dir)) {
                File::deleteDirectories($dir);
                File::deleteDirectory($dir);
            }
            mkdir($dir);
            $this->image->storeAs($path,$imagename);
        File::deleteDirectory(public_path('assets/livewire-tmp'));
        session()->flash('message', "Image Updated Succefully");
        return redirect()->route('supervisor.hall.show',['id'=>$this->imageModel->hall->id]);
        }
    public function render()
    {
        return view('livewire.supervisor.edit-hall-photo');
    }
}
