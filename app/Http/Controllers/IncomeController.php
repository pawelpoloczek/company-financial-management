<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

final class IncomeController extends Controller
{
    public function index(): View
    {
        return view('incomes.index');
    }

    public function create(): View
    {
        return view('incomes.create');
    }

    public function store(Request $request): Response
    {
        //
    }

    public function edit(Income $income): View
    {
        return view('incomes.edit');
    }

    public function update(Request $request, Income $income): Response
    {
        //
    }

    public function destroy(Income $income): Response
    {
        //
    }
}
