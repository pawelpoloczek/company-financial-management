<?php

declare(strict_types=1);

use App\Http\Controllers\SecurityController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/', DashboardController::class)
    ->name('dashboard');

Route::get('/user/profile', function() {
    return redirect('/profile');
});

Route::get('/login', [SecurityController::class, 'login'])->name('login');
Route::get('/logout', [SecurityController::class, 'logout'])->name('logout');
Route::get('/profile', [SecurityController::class, 'profile'])->name('profile');

Route::post('/update-password', [SecurityController::class, 'updatePassword'])
    ->name('update-password');

Route::resource('expenses', ExpenseController::class)->except(['show']);
Route::resource('incomes', IncomeController::class)->except(['show']);
Route::resource('expenseTypes', ExpenseTypeController::class)->except(['show']);
Route::resource('incomeTypes', IncomeTypeController::class)->except(['show']);
Route::resource('currencies', CurrencyController::class)->except(['show']);
Route::resource('taxRates', TaxRateController::class)->except(['show']);
