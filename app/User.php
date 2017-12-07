<?php

namespace App;

use App\Phone;
use App\Role;
use App\Vehicle;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
