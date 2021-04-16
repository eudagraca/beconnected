<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name','descrition','price', 'company_id'];


    public function imageDetail() {
        return $this->hasOne(ImageDetails::class);
    }

    /* public function company () {
        return $this->hasMany(Company::class);
    } */
    public function company () {
        return $this->belongsTo(Company::class);
    }
}
