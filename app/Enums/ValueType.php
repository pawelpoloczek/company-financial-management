<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ValueType extends Enum
{
    public const NET = 0;
    public const GROSS = 1;
}
