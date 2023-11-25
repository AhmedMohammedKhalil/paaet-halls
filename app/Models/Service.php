<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function halls()
    {
        return $this->belongsToMany(Hall::class,'hall_services','service_id','hall_id')
        ->using(HallService::class)->withTimestamps();
    }
}
