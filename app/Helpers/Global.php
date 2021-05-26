<?php

use App\Models\User;
use App\Models\Forum;

function totalUsers(){
    return User::count();
}

function totalForums(){
    return Forum::count();
}