<?php

declare(strict_types=1);

use ObjectCalisthenics\Sniffs\Files\ClassTraitAndInterfaceLengthSniff;

return [
    'preset' => 'laravel',
    'ide' => 'phpstorm',
    'exclude' => [
        'bin/',
    ],
    'add' => [],
    'remove' => [],
    'config' => [
        ClassTraitAndInterfaceLengthSniff::class => [
            'maxLength' => 300,
        ],
    ],
    'requirements' => [
        'min-quality' => 85,
        'min-complexity' => 85,
        'min-architecture' => 90,
        'min-style' => 95,
        'disable-security-check' => false,
    ],
];
