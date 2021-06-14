<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        return view('expenses.create');
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

        return redirect()->route('expenses.index')->with('success', 'Expense created successfully.');
    }

    public function edit(Expense $expense): View
    {
        return view('expenses.edit');
    }

    public function update(Request $request, Expense $expense): Response
    {
        //
    }

    public function destroy(Expense $expense): RedirectResponse
    {
        $expense->delete();

        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
}