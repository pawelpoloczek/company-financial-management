<?php

declare(strict_types=1);

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\SecurityController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::post('/change-locale', [LocaleController::class, 'changeLocale'])->name('change-locale');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/', DashboardController::class)
    ->name('dashboard')->middleware(Localization::class);

Route::get('/user/profile', function () {
    return redirect('/profile');
})->middleware(Localization::class);

Route::get('/login', [SecurityController::class, 'login'])
    ->name('login')->middleware(Localization::class);
Route::get('/logout', [SecurityController::class, 'logout'])
    ->name('logout')->middleware(Localization::class);
Route::get('/profile', [SecurityController::class, 'profile'])
    ->name('profile')->middleware(Localization::class);

Route::post('/update-password', [SecurityController::class, 'updatePassword'])
    ->name('update-password')->middleware(Localization::class);

Route::resource('expenses', ExpenseController::class)
    ->except(['show'])->middleware(Localization::class);
Route::resource('incomes', IncomeController::class)
    ->except(['show'])->middleware(Localization::class);
Route::resource('expenseTypes', ExpenseTypeController::class)
    ->except(['show'])->middleware(Localization::class);
Route::resource('incomeTypes', IncomeTypeController::class)
    ->except(['show'])->middleware(Localization::class);
Route::resource('currencies', CurrencyController::class)
    ->except(['show'])->middleware(Localization::class);
Route::resource('taxRates', TaxRateController::class)
    ->except(['show'])->middleware(Localization::class);
