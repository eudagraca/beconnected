<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_Details extends Model
{
    protected $fillable = ['src', 'Image_id'];

   
    public function Image() {     
        return $this->belongsTo('Image::class'); }
}
