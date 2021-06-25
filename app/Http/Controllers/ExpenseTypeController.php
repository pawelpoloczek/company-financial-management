<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\ExpenseType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ExpenseTypeController extends Controller
{
    public function index(): View
    {
        $expenseTypes = ExpenseType::latest()->paginate(5);

        return view('expenseTypes.index', compact('expenseTypes'));
    }

    public function create(): View
    {
        return view('expenseTypes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        ExpenseType::create($request->all());

        return redirect()
            ->route('expenseTypes.index')
            ->with(
                'success',
                trans('messages.element-created-successfully')
            );
    }

    public function edit(ExpenseType $expenseType): View
    {
        return view('expenseTypes.edit', compact('expenseType'));
    }

    public function update(Request $request, ExpenseType $expenseType): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $expenseType->update($request->all());

        return redirect()
            ->route('expenseTypes.index')
            ->with(
                'success',
                trans('messages.element-updated-successfully')
            );
    }

    public function destroy(ExpenseType $expenseType): RedirectResponse
    {
        $expenseType->delete();

        return redirect()
            ->route('expenseTypes.index')
            ->with(
                'success',
                trans('messages.element-deleted-successfully')
            );
    }
}
