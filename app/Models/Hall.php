<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    public $table ='halls';
    protected $fillable = [
        'details', 'gender', 'number','capacity','cover','video','supervisor_id','building_id'
    ];


    public function professors()
    {
        return $this->belongsToMany(Professor::class,'reserves','hall_id','professor_id')
        ->using(Reserve::class)->withPivot('id','status','start_at','end_at','date')->withTimestamps();
    }

    public function supervisor () {
        return $this->belongsTo(Supervisor::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function building() {
        return $this->belongsTo(Building::class);
    }

    public function notification () {
        return $this->hasMany(Notification::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class,'hall_services','hall_id','service_id')
        ->using(HallService::class)->withTimestamps();
    }

}
