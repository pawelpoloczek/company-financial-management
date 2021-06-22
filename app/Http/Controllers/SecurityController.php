<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

final class SecurityController extends Controller
{
    public function login(): View
    {
        return view('security.login');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        Session()->flush();

        return Redirect::to('/login');
    }
}
