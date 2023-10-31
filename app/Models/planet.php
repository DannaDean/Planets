<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'planet_name', 'orbiting_star', 'galaxy_name', 'orbiting_time_days', 'habitability', 'planet_class', 'planet_description'
    ];

    protected $table = "planets";

    public $timestamps = false;
}
