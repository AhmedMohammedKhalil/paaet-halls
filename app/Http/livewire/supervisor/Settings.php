<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Supervisor;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $image, $phone='', $address='',$supervisor_id='';


    public function mount() {
        $this->supervisor_id = Auth::guard('supervisor')->user()->id;
        $this->name = Auth::guard('supervisor')->user()->name;
        $this->email = Auth::guard('supervisor')->user()->email;
        $this->phone = Auth::guard('supervisor')->user()->phone;
        $this->address = Auth::guard('supervisor')->user()->address;

    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'address' => ['required', 'string', 'max:255']
    ];

    public function updatedImage()
    {
            $validatedata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,
                [ 'email'   => ['required','email',"unique:companies,email,".$this->supervisor_id],
        ]));
        if(!$this->image)
            Supervisor::whereId($this->supervisor_id)->update($validatedata);
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            supervisor::whereId($this->supervisor_id)->update(array_merge($validatedata,['image' => $imagename]));
            $dir = public_path('img/supervisors/'.$this->supervisor_id);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs($dir,$imagename);
            File::deleteDirectory(public_path('uploads/livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('supervisor.profile');
    }

    public function render()
    {
        return view('livewire.supervisor.settings');
    }
}
