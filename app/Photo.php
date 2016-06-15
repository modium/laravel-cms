<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/';

    protected $fillable = ['file'];

    // accessor
    public function getFileAttribute($photo) { // usually named after the column of the file name

        return $this->uploads . $photo;

    }

}
