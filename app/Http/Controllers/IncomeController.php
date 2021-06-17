<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Income;
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
        return view('incomes.create');
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
        ]);

        Income::create($request->all());

        return redirect()->route('incomes.index')->with('success', 'Income created successfully.');
    }

    public function edit(Income $income): View
    {
        return view('incomes.edit', compact('income'));
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
        ]);

        $income->update($request->all());

        return redirect()->route('incomes.index')->with('success', 'Income updated successfully.');
    }

    public function destroy(Income $income): RedirectResponse
    {
        $income->delete();

        return redirect()->route('incomes.index')->with('success', 'Income deleted successfully.');
    }
}
