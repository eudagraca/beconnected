<?php

namespace App;
use App\Http\Traits\Hashidable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
     use Notifiable;
     use HasRoles;
    use Hashidable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne(Company::class);
    }


    public function latestMessageTo()
    {
        return $this->hasOne('App\Models\Message', 'recipient_to')->orderBy('created_at', 'desc')->latest();
    }

    public function latestMessageFrom()
    {
        return $this->hasOne('App\Models\Message', 'user_id')->orderBy('created_at', 'desc')->latest();
    }

    public function messages()
    {
        return $this->hasMany('App\Message', 'user_id', 'user_id');
    }

}
