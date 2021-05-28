<?php

use App\Models\User;
use App\Models\Forum;
use App\Models\Cash;
use App\Models\Inventory;

function totalUsers(){
    return User::count();
}

function totalForums(){
    return Forum::count();
}

function totalInventory(){
    return Inventory::count();
}

function CashsIn(){
    $cashsIn = DB::select(DB::raw("SELECT cast(sum(amount) as int) as amount from cashes where type='Masuk'"));
    return $cashsIn[0]->amount;  
}

function CashsOut(){
    $cashsOut = DB::select(DB::raw("SELECT cast(sum(amount) as int) as amount from cashes where type='keluar'"));
    return $cashsOut[0]->amount;  
}


function totalCashs(){
    CashsIn();
    CashsOut();
    return $hitung = CashsIn() - CashsOut();
}
