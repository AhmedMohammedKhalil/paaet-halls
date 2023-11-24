<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    public $table = 'buildings';

    protected $fillable = [
        'title', 'details', 'address','image','supervisor_id'
    ];
    public function supervisor () {
        return $this->belongsTo(Supervisor::class);
    }
    public function halls () {
        return $this->hasMany(Hall::class);
    }
    
}
