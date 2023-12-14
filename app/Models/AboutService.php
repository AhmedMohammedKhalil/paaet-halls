<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutService extends Model
{
    use HasFactory;
    public $table = 'about_services';

    protected $fillable = [
        'title', 'content',
    ];


}
