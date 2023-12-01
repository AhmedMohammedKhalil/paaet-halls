<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Professor extends Authenticatable
{
    protected $guard = 'professor';
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password','phone','image','address'
    ];

    public function halls()
    {
        return $this->belongsToMany(Hall::class,'reserves','professor_id','hall_id')
        ->using(Reserve::class)->withPivot('id','start_at','end_at')->withTimestamps();
    }

    public function supervisors()
    {
        return $this->belongsToMany(Supervisor::class,'notification','professor_id','supervisor_id')
        ->using(Notification::class)->withPivot('id','type','content','author','date','hall_id')->withTimestamps();
    }



}
