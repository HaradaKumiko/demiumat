<?php

use App\Models\User;

function totalUser(){
    return User::count();
}