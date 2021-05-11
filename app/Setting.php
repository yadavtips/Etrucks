<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
        'vehicle_type',
        'lead_source',
        'extra1',
        'extra2',
        'extra3',
        'extra4'
    ];

 
}
