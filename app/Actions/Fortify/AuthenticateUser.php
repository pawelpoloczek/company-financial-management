<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

final class AuthenticateUser
{
    public function __invoke(Request $request): ?User
    {
        $user = User::where('email', $request->email)->first();
        if ($user === null) {
            return null;
        }

        $isActive = $user->status === UserStatus::ACTIVE;
        $passIsCorrect = Hash::check($request->password, $user->password);

        if ($user && $passIsCorrect && $isActive) {
            return $user;
        }

        return null;
    }
}
