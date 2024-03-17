<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/test', function () {
    dump ('jello');

    // User::with('notifications')->latest()->limit(5)->dd()->get(); //dd() before get() to inspect query

    str('Hello')->append(' world first apa() is firstchar capital')->apa()->dump()->toString();
    
    return view('test');
});
