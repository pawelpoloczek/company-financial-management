<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\ValueType;

final class FormDataCalculator
{
    public function calculate(array $formData): array
    {
        $valueType = ValueType::fromValue((int) $formData['value_type']);
        $value = $formData['value'];
        $taxValueCalculator = new TaxValueCalculator();
        $taxValue = $taxValueCalculator->calculateTaxValue(
            (float) $formData['value'],
            (int) $formData['tax_rate_id'],
            $valueType
        );

        $formData['tax'] = $taxValue;

        if ($valueType->is(ValueType::NET)) {
            $formData['net'] = $value;
            $formData['gross'] = $value + $taxValue;
        } else {
            $formData['net'] = $value - $taxValue;
            $formData['gross'] = $value;
        }

        return $formData;
    }
}