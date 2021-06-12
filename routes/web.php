<?php

declare(strict_types=1);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/', [DashboardController::class, 'dashboard'])
    ->name('dashboard');

Route::get('logout', [DashboardController::class, 'logout'])
    ->name('logout');

Route::resources([
    'expenses' => ExpenseController::class,
    'incomes' => IncomeController::class,
]);