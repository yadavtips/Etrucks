<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = [
            'phone',
            'vehicle_type',
            'load_from',
            'dispatch_to',
            'remarks',
            'name',
            'lead_from',
            'assigned_to',
            'load_type',
            'lead_status',
       
    ];
  
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
