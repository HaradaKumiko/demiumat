<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    protected $guarded = [
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

    public function getAvatar()
    {
        return Storage::url(Auth::user()->avatar);
    }

    public function forums()
    {
        return $this->hasMany('App\Models\Forum');
    }

    public function blogs()
    {
        return $this->hasMany('App\Models\Blog');
    }

    public function cashs()
    {
        return $this->hasMany('App\Models\Cash');
    }

}
