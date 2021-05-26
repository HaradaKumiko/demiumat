<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $guarded = [];

    public function ownership()
    {
        if (Auth::check()) {
            return Auth::user()->id == $this->user->id;
        }
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
