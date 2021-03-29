<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/welcome',function (){
    $users = User::all();

    return $users;

});
