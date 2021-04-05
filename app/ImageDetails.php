<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageDetails extends Model
{
    protected $fillable = ['src', 'Image_id'];

   
    public function image() {     
        return $this->belongsTo(Image::class); }
}
