<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'jobs';
    protected $fillable = [
         
            'lead_status',
       
    ];
}
