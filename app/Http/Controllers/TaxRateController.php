<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\TaxRate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class TaxRateController extends Controller
{
    public function index(): View
    {
        $taxRates = TaxRate::latest()->paginate(5);

        return view('taxRates.index', compact('taxRates'));
    }

    public function create(): View
    {
        return view('taxRates.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        TaxRate::create($request->all());

        return redirect()
            ->route('taxRates.index')
            ->with('success', 'Tax rate created successfully.');
    }

    public function edit(TaxRate $taxRate): View
    {
        return view('taxRates.edit', compact('taxRate'));
    }

    public function update(Request $request, TaxRate $taxRate): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        $taxRate->update($request->all());

        return redirect()
            ->route('taxRates.index')
            ->with('success', 'Tax rate updated successfully.');
    }

    public function destroy(TaxRate $taxRate): RedirectResponse
    {
        $taxRate->delete();

        return redirect()
            ->route('taxRates.index')
            ->with('success', 'Tax rate deleted successfully.');
    }
}
