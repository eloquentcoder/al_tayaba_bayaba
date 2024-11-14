<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\PasswordReset;
use App\Livewire\Auth\Register;
use App\Livewire\Home\About;
use App\Livewire\Home\Index;
use App\Livewire\Home\Plan;
use App\Livewire\Portal\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('', Index::class)->name('home.index');
Route::get('plan', Plan::class)->name('home.plan');
Route::get('about', About::class)->name('home.about');

Route::get('login', Login::class)->name('home.login');
Route::get('register', Register::class)->name('home.register');
Route::get('password-reset', PasswordReset::class)->name('home.password-reset');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard.index');
});