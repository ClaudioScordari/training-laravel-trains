<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    // mass assignment
    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'code',
        'num_carriages',
        'in_time',
        'deleted'
    ];  
}
