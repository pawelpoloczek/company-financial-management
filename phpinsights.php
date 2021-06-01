<?php

declare(strict_types=1);

use ObjectCalisthenics\Sniffs\Files\ClassTraitAndInterfaceLengthSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;

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
        LineLengthSniff::class => [
            'lineLimit' => 100,
            'absoluteLineLimit' => 120,
            'ignoreComments' => false,
        ],
    ],
    'requirements' => [
        'min-quality' => 85,
        'min-complexity' => 80,
        'min-architecture' => 80,
        'min-style' => 95,
        'disable-security-check' => false,
    ],
];
