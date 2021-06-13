<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

final class ExpenseController extends Controller
{
    public function index(): View
    {
        return view('expenses.index');
    }

    public function create(): View
    {
        return view('expenses.create');
    }

    public function store(Request $request): Response
    {
        //
    }

    public function edit(Expense $expense): View
    {
        return view('expenses.edit');
    }

    public function update(Request $request, Expense $expense): Response
    {
        //
    }

    public function destroy(Expense $expense): Response
    {
        //
    }
}
