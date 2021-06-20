<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

abstract class PasswordValidationRules
{
    protected function passwordRules(): array
    {
        return ['required', 'string', new Password(), 'confirmed'];
    }
}
