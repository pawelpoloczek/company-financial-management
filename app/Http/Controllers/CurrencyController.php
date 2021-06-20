<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class CurrencyController extends Controller
{
    public function index(): View
    {
        $currencies = Currency::latest()->paginate(5);

        return view('currencies.index', compact('currencies'));
    }

    public function create(): View
    {
        return view('currencies.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'symbol' => 'required',
        ]);

        Currency::create($request->all());

        return redirect()
            ->route('currencies.index')
            ->with('success', 'Currency created successfully.');
    }

    public function edit(Currency $currency): View
    {
        return view('currencies.edit', compact('currency'));
    }

    public function update(Request $request, Currency $currency): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'symbol' => 'required',
        ]);

        $currency->update($request->all());

        return redirect()
            ->route('currencies.index')
            ->with('success', 'Currency updated successfully.');
    }

    public function destroy(Currency $currency): RedirectResponse
    {
        $currency->delete();

        return redirect()
            ->route('currencies.index')
            ->with('success', 'Currency deleted successfully.');
    }
}
