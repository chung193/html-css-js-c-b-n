<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController; 
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dang-ky', [MemberController::class, 'index'])->name('member.index');
Route::post('/dang-ky', [MemberController::class, 'store'])->name('member.register');