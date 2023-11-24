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
        ->using(Reserve::class)->withPivot('id','status','start_at','end_at','date')->withTimestamps();
    }
}
