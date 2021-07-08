<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\ValueType;
use App\Models\TaxRate;

final class ValueCalculator
{
    public function calculateValue(float $value, int $taxRateId, ValueType $valueType): float
    {
        $taxRate = TaxRate::find($taxRateId);
        if ($taxRate === null) {
            throw new \InvalidArgumentException('Tax rate ID is wrong!');
        }

        if ($valueType->is(ValueType::NET)) {
            return $this->calculateFromNet($value, $taxRate->value);
        }

        return $this->calculateFromGross($value, $taxRate->value);
    }

    private function calculateFromNet(float $value, float $taxRateValue): float
    {
        return $value * (100 + $taxRateValue) / 100;
    }

    private function calculateFromGross(float $value, float $taxRateValue): float
    {
        return $value * 100 / (100 + $taxRateValue);
    }
}
