<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image','hall_id'
    ];
    public function hall() {
        return $this->belongsTo(Hall::class);
    }
}
