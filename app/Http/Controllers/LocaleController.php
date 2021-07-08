<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class LocaleController extends Controller
{
    public function changeLocale(Request $request): RedirectResponse
    {
        $request->validate(['locale' => 'required']);
        $requestData = $request->all();
        $request->session()->put('locale', $requestData['locale']);

        return redirect()->route('dashboard');
    }
}
