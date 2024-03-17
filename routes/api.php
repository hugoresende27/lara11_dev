<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/latest-users', function (Request $request) {
    return User::latest()->limit(25)->get();
});//->middleware('auth:sanctum');

Route::get('test', function () {
    return User::latest()->limit(25)->get();
});
