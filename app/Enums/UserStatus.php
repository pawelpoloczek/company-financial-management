<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserStatus extends Enum
{
    public const INACTIVE = 0;
    public const ACTIVE = 1;
}
