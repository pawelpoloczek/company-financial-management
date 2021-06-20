<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

final class UpdateUserPassword extends PasswordValidationRules implements UpdatesUserPasswords
{
    public function update($user, array $input): void
    {
        $this->validate($user, $input);

        $user->forceFill(
            [
                'password' => Hash::make($input['password']),
            ]
        )->save();
    }

    private function validate(?User $user, array $input): void
    {
        Validator::make(
            $input,
            [
                'current_password' => ['required', 'string'],
                'password' => $this->passwordRules(),
            ]
        )->after(function ($validator) use ($user, $input) {
            if (! isset($input['current_password'])
                || ! Hash::check($input['current_password'], $user->password)
            ) {
                $validator->errors()->add(
                    'current_password',
                    __('The provided password does not match your current password.')
                );
            }
        })->validateWithBag('updatePassword');
    }
}
