<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name','descrition','price', 'company_id'];


    public function imageDetail() {
        return $this->hasOne(ImageDetails::class);
    }
}
