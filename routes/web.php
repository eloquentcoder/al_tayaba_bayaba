<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\PasswordReset;
use App\Livewire\Auth\Register;
use App\Livewire\Home\About;
use App\Livewire\Home\Index;
use App\Livewire\Home\Plan;
use App\Livewire\Portal\MyReferral;
use App\Livewire\Portal\Dashboard;
use App\Livewire\Portal\Deposit;
use App\Livewire\Portal\Payout;
use App\Livewire\Portal\PayoutPreview;
use App\Livewire\Portal\Profile;
use App\Livewire\Portal\TwoStepSecurity;
use Illuminate\Support\Facades\Route;

Route::get('', Index::class)->name('home.index');
Route::get('plan', Plan::class)->name('home.plan');
Route::get('about', About::class)->name('home.about');

Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
Route::get('password-reset', PasswordReset::class)->name('password-reset');

Route::middleware('auth')->as('portal.')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('profile', Profile::class)->name('profile');
    Route::get('twostep-security', TwoStepSecurity::class)->name('twostep-security');
    Route::get('add-fund', Deposit::class)->name('add-fund');

    Route::get('payout', Payout::class)->name('payout');
    Route::get('payout/preview', PayoutPreview::class)->name('payout-preview');

    Route::get('referrals', MyReferral::class)->name('referrals');

});
