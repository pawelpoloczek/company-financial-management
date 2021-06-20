<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

final class CurrencyFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Currency::class;

    public function definition(): array
    {
        return [];
    }
}
