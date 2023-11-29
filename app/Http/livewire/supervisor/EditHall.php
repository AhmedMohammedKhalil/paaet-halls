<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Hall;
use App\Models\Service;
use Livewire\Component;
use App\Models\Building;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EditHall extends Component
{

    use WithFileUploads;

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
        $this->buildings = Building::where('supervisor_id',$this->supervisor_id)->get();
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

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'video.mimes' => 'لابد ان يكون الفيديو mp4,mkv,flv',
        'video.max' => 'يجب ان تكون الفيديو اصغر من 100 ميجا',
        'details.max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    protected $rules = [
        'number' => ['required'],
        'gender' => ['required', 'string'],
        'capacity' => ['required', 'string'],
        'details' => ['required', 'max:255'],
        'supervisor_id' => ['required'],
        'building_id' => ['required'],
        'services' => ['required'],

    ];

    public function updatedCover()
    {
        $validatedata = $this->validate(
            ['cover' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }
    public function updatedVideo()
    {
        $validatedata = $this->validate(
            ['video' => ['mimes:mp4,mkv,flv', 'max:102400']]
        );
    }
    public function updatedImages()
    {
        $validatedata = $this->validate(
            ['images.*' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }


    public function edit() {

        $validatedData = $this->validate();
        unset($validatedData['services']);
        $this->hall->services()->sync($this->services);
        if(!$this->cover) {
            $this->hall->update($validatedData);
        }
        $path = '/images/halls/'.$this->hall->id;
        $dir = public_path('assets'.$path);
        if($this->cover) {
            $this->updatedCover();
            $imagename = $this->cover->getClientOriginalName();
            $this->hall->update(array_merge($validatedData,['cover'=> $imagename]));

            if(file_exists($dir.'/cover')) {
                File::deleteDirectories($dir.'/cover');
                File::deleteDirectory($dir.'/cover');
            }
            mkdir($dir.'/cover');
            $this->cover->storeAs($path.'/cover',$imagename);
        }

        if($this->video) {
            $this->updatedVideo();
            $videoname = $this->video->getClientOriginalName();
            $this->hall->update(array_merge($validatedData,['video'=>$videoname]));

            if(file_exists($dir.'/video')) {
                File::deleteDirectories($dir.'/video');
                File::deleteDirectory($dir.'/video');
            }
            mkdir($dir.'/video');
            $this->video->storeAs($path.'/video',$videoname);
        }
        if(isset($this->images) && count($this->images) > 0) {
            if(!file_exists($dir.'/images')) {
                mkdir($dir.'/images');
            }
            foreach($this->images as $image) {
                $imageName = $image->getClientOriginalName();
                $img = Image::create([
                    'image'=>$imageName,'hall_id'=>$this->hall->id
                ]);

                if(file_exists($dir.'/images/'.$img->id)) {
                    File::deleteDirectories($dir.'/images/'.$img->id);
                }
                else {
                    mkdir($dir.'/images/'.$img->id);
                }
                $image->storeAs($path.'/images/'.$img->id,$imageName);
            }
        }
        File::deleteDirectory(public_path('assets/livewire-tmp'));
        session()->flash('message', "Hall Updated Succefully");
        return redirect()->route('supervisor.hall.index');
    }

    public function render()
    {
        return view('livewire.supervisor.edit-hall');
    }
}
