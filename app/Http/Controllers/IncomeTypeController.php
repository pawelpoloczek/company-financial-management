<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\IncomeType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class IncomeTypeController extends Controller
{
    public function index(): View
    {
        $incomeTypes = IncomeType::latest()->paginate(5);

        return view('incomeTypes.index', compact('incomeTypes'));
    }

    public function create(): View
    {
        return view('incomeTypes.create');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        IncomeType::create($request->all());

        return redirect()
            ->route('incomeTypes.index')
            ->with('success', 'Income type created successfully.');
    }
    
    public function edit(IncomeType $incomeType): View
    {
        return view('incomeTypes.edit', compact('incomeType'));
    }
    
    public function update(Request $request, IncomeType $incomeType): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $incomeType->update($request->all());

        return redirect()
            ->route('incomeTypes.index')
            ->with('success', 'Income type updated successfully.');
    }
    
    public function destroy(IncomeType $incomeType): RedirectResponse
    {
        $incomeType->delete();

        return redirect()
            ->route('incomeTypes.index')
            ->with('success', 'Income type deleted successfully.');
    }
}
