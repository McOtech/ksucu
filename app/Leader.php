<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{

    protected $fillable = [
        'name', 'course', 'description', 'image', 'message'
      ];


}

