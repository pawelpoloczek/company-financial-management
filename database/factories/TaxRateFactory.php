<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TaxRate;
use Illuminate\Database\Eloquent\Factories\Factory;

final class TaxRateFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = TaxRate::class;

    public function definition(): array
    {
        return [];
    }
}
