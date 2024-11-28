<?php

use App\Http\Middleware\AdminAuthMiddleware;
use App\Livewire\Admin\Admins;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Deposits;
use App\Livewire\Admin\Login as AdminLogin;
use App\Livewire\Admin\Plans;
use App\Livewire\Admin\SubscriptionRequest;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\PasswordReset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\TwoFAVerify;
use App\Livewire\Home\About;
use App\Livewire\Home\Index;
use App\Livewire\Home\Plan;
use App\Livewire\Portal\MyReferral;
use App\Livewire\Portal\Dashboard;
use App\Livewire\Portal\Deposit;
use App\Livewire\Portal\DepositHistory;
use App\Livewire\Portal\Packages;
use App\Livewire\Portal\Payout;
use App\Livewire\Portal\PayoutPreview;
use App\Livewire\Portal\Profile;
use App\Livewire\Portal\Transactions;
use App\Livewire\Portal\TwoStepSecurity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('', Index::class)->name('home.index');
Route::get('plan', Plan::class)->name('home.plan');
Route::get('about', About::class)->name('home.about');

Route::get('admin/login', AdminLogin::class)->name('admin.login');
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
Route::get('2fa/verify', TwoFAVerify::class)->name('2fa.verify');
Route::get('password-reset', PasswordReset::class)->name('password-reset');



Route::middleware(['auth'])->as('portal.')->group(function () {
    Route::middleware('2fa')->group(function () {
        Route::get('dashboard', Dashboard::class)->name('dashboard');
        Route::get('profile', Profile::class)->name('profile');
        Route::get('add-fund', Deposit::class)->name('add-fund');
        
        Route::get('payout', Payout::class)->name('payout');
        Route::get('payout/preview', PayoutPreview::class)->name('payout-preview');
        
        Route::get('referrals', MyReferral::class)->name('referrals');
        Route::get('packages', Packages::class)->name('packages');
        Route::get('transactions', Transactions::class)->name('transactions');
        Route::get('deposit-history', DepositHistory::class)->name('deposit-history');
    });
    Route::get('twostep-security', TwoStepSecurity::class)->name('twostep-security');

});

Route::middleware('auth_admin')->as('admin.')->prefix("admin")->group(function () {
    Route::get('dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('deposits', Deposits::class)->name('deposits');
    Route::get('admins', Admins::class)->name('admins');
    Route::get('plans', Plans::class)->name('plans');
    Route::get('subscription-requests', SubscriptionRequest::class)->name('subscription-requests');
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});