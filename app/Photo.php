<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Photo extends Model
{
    protected $fillable = ['path', 'alt'];

    protected $img_folder = 'images/';

    public function getPathAttribute($photo){
        return asset($this->img_folder . $photo);
    }
}
