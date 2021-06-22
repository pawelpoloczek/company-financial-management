<?php

declare(strict_types=1);

use App\Http\Controllers\SecurityController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/', DashboardController::class)
    ->name('dashboard');

Route::get('login', [SecurityController::class, 'login'])->name('login');
Route::get('logout', [SecurityController::class, 'logout'])->name('logout');

Route::resource('expenses', ExpenseController::class)->except(['show']);
Route::resource('incomes', IncomeController::class)->except(['show']);
Route::resource('expenseTypes', ExpenseTypeController::class)->except(['show']);
Route::resource('incomeTypes', IncomeTypeController::class)->except(['show']);
Route::resource('currencies', CurrencyController::class)->except(['show']);
Route::resource('taxRates', TaxRateController::class)->except(['show']);
