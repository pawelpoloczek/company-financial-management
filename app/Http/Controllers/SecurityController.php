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

    public function profile(): View
    {
        $user = Auth::user();

        return view('security.profile', compact('user'));
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        $loggedUser = Auth::user();
        $user = User::find($loggedUser->id);

        $requestData = $request->all();
        if (! Hash::check($requestData['current_password'], $user->password)) {
            return redirect()->route('profile')->with('error', 'Current password is wrong.');
        }

        if ($requestData['new_password'] !== $requestData['confirm_password']) {
            return redirect()->route('profile')->with('error', 'Password confirmation is wrong.');
        }

        $user->password = Hash::make($requestData['new_password']);
        $user->save();

        return redirect()->route('profile')->with('success', 'Password updated successfully.');
    }
}
