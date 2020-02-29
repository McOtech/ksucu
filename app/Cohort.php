<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    protected $fillable = [
        'category', 'name', 'image', 'about', 'policy', 'aboutContent', 'policyContent'
    ];

    public function membership(){
        return $this->hasMany(Membership::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
