<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Income;
use Illuminate\Database\Eloquent\Factories\Factory;

final class IncomeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Income::class;

    public function definition(): array
    {
        return [];
    }
}
