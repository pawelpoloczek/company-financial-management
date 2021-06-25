<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Expense;
use App\Models\ExpenseType;
use App\Models\TaxRate;
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
        $currencies = Currency::all();
        $taxRates = TaxRate::all();

        return view(
            'expenses.create',
            compact('expenseTypes', 'currencies', 'taxRates')
        );
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
            'currency_id' => 'required',
        ]);

        Expense::create($request->all());

        return redirect()
            ->route('expenses.index')
            ->with(
                'success',
                trans('messages.element-created-successfully')
            );
    }

    public function edit(Expense $expense): View
    {
        $expenseTypes = ExpenseType::all();
        $currencies = Currency::all();
        $taxRates = TaxRate::all();

        return view(
            'expenses.edit',
            compact('expense', 'expenseTypes', 'currencies', 'taxRates')
        );
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
            'currency_id' => 'required',
        ]);

        $expense->update($request->all());

        return redirect()
            ->route('expenses.index')
            ->with(
                'success',
                trans('messages.element-updated-successfully')
            );
    }

    public function destroy(Expense $expense): RedirectResponse
    {
        $expense->delete();

        return redirect()
            ->route('expenses.index')
            ->with(
                'success',
                trans('messages.element-deleted-successfully')
            );
    }
}
