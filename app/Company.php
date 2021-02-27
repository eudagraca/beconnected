<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
      'company_name', 'email', 'phone', 'alternative_phone', 'classification',
      'about_company', 'main_services', 'address', 'province', 'district',
      'license', 'segment_area', 'logo', 'user_id'
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }
}
