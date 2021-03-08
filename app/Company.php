<?php

namespace App;

use App\Http\Traits\Hashidable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Hashidable;
    protected $fillable = [
        'company_name', 'email', 'phone', 'alternative_phone', 'classification',
        'about_company', 'main_services', 'address', 'province', 'district',
        'license', 'segment_area', 'logo', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
