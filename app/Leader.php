<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Leader extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name', 'course', 'description', 'image', 'message'
      ];



    public function deleteImage()
    {
      Storage::delete($this->image);
    }


}

