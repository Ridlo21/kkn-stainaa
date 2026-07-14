<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autentikasi;

Route::get('/login', [Autentikasi::class, 'index'])->name('login');
Route::post('/login', [Autentikasi::class, 'login']);

Route::get('/', [Admin::class, 'index'])->name('admin.dashboard');
