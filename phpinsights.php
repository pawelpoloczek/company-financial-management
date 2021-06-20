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
            'lineLimit' => 120,
            'absoluteLineLimit' => 130,
            'ignoreComments' => false,
        ],
    ],
    'requirements' => [
        'min-quality' => 85,
        'min-complexity' => 85,
        'min-architecture' => 95,
        'min-style' => 95,
        'disable-security-check' => false,
    ],
];
