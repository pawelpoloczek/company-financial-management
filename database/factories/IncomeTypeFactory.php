<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\IncomeType;
use Illuminate\Database\Eloquent\Factories\Factory;

final class IncomeTypeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = IncomeType::class;

    public function definition(): array
    {
        return [];
    }
}
