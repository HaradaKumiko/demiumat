<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $guarded = [];

    protected $table = 'cashs';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
