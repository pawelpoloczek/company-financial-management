<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Income;
use App\Models\IncomeType;
use App\Models\TaxRate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class IncomeController extends Controller
{
    public function index(): View
    {
        $incomes = Income::latest()->paginate(5);

        return view('incomes.index', compact('incomes'));
    }

    public function create(): View
    {
        $incomeTypes = IncomeType::all();
        $currencies = Currency::all();
        $taxRates = TaxRate::all();

        return view(
            'incomes.create',
            compact('incomeTypes', 'currencies', 'taxRates')
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
            'income_type_id' => 'required',
            'currency_id' => 'required',
        ]);

        Income::create($request->all());

        return redirect()
            ->route('incomes.index')
            ->with(
                'success',
                trans('messages.element-created-successfully')
            );
    }

    public function edit(Income $income): View
    {
        $incomeTypes = IncomeType::all();
        $currencies = Currency::all();
        $taxRates = TaxRate::all();

        return view(
            'incomes.edit',
            compact('income', 'incomeTypes', 'currencies', 'taxRates')
        );
    }

    public function update(Request $request, Income $income): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'net' => 'required',
            'gross' => 'required',
            'tax' => 'required',
            'tax_rate_id' => 'required',
            'income_type_id' => 'required',
            'currency_id' => 'required',
        ]);

        $income->update($request->all());

        return redirect()
            ->route('incomes.index')
            ->with(
                'success',
                trans('messages.element-updated-successfully')
            );
    }

    public function destroy(Income $income): RedirectResponse
    {
        $income->delete();

        return redirect()
            ->route('incomes.index')
            ->with(
                'success',
                trans('messages.element-deleted-successfully')
            );
    }
}
