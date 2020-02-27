<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'cohort_id', 'name', 'date', 'venue', 'location', 'image', 'description'
    ];

    public function cohort(){
        return $this->belongsTo(Cohort::class);
    }
}
