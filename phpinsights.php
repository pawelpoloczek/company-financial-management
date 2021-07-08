<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;
use SlevomatCodingStandard\Sniffs\Functions\FunctionLengthSniff;

return [
    'preset' => 'laravel',
    'ide' => 'phpstorm',
    'exclude' => [
        'bin/',
    ],
    'add' => [],
    'remove' => [],
    'config' => [
        LineLengthSniff::class => [
            'lineLimit' => 120,
            'absoluteLineLimit' => 130,
            'ignoreComments' => false,
        ],
        FunctionLengthSniff::class => [
            'maxLinesLength' => 30,
        ],
    ],
    'requirements' => [
        'min-quality' => 90,
        'min-complexity' => 85,
        'min-architecture' => 95,
        'min-style' => 95,
        'disable-security-check' => false,
    ],
];
