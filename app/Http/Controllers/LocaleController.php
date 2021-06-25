<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

final class LocaleController extends Controller
{
    public function setLocale(Request $request): RedirectResponse
    {
        $request->validate(['locale' => 'required']);
        $requestData = $request->all();
        $request->session()->put('locale', $requestData['locale']);

        return redirect()->route('dashboard');
    }
}
