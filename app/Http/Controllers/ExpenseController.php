<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ExpenseController extends Controller
{
    public function index(): View
    {
        $expenses = Expense::latest()->paginate(5);

        return view('expenses.index', compact('expenses'));
    }

    public function create(): View
    {
        $expenseTypes = ExpenseType::all();

        return view('expenses.create', compact('expenseTypes'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'net' => 'required',
            'gross' => 'required',
            'tax' => 'required',
            'tax_rate_id' => 'required',
            'expense_type_id' => 'required',
        ]);

        Expense::create($request->all());

        return redirect()
            ->route('expenses.index')
            ->with('success', 'Expense created successfully.');
    }

    public function edit(Expense $expense): View
    {
        $expenseTypes = ExpenseType::all();

        return view('expenses.edit', compact('expense', 'expenseTypes'));
    }

    public function update(Request $request, Expense $expense): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'net' => 'required',
            'gross' => 'required',
            'tax' => 'required',
            'tax_rate_id' => 'required',
            'expense_type_id' => 'required',
        ]);

        $expense->update($request->all());

        return redirect()
            ->route('expenses.index')
            ->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense): RedirectResponse
    {
        $expense->delete();

        return redirect()
            ->route('expenses.index')
            ->with('success', 'Expense deleted successfully.');
    }
}
