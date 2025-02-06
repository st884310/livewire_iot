<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// orderTracker
Route::get('orderTracker', App\Livewire\OrderTracker::class)
    ->name('order-tracker');

require __DIR__.'/auth.php';
