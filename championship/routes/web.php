<?php

use App\Http\Controllers\User;
use App\Http\Controllers\Sponsor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::resource('user', User::class);
Route::resource('sponsor', Sponsor::class);