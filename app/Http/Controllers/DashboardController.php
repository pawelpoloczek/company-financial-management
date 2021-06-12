<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

final class DashboardController extends Controller
{
    public function dashboard(): View
    {
        return view('dashboard.dashboard');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        Session()->flush();

        return Redirect::to('/login');
    }
}
