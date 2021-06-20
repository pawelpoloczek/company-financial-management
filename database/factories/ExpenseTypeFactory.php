<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ExpenseType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseTypeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = ExpenseType::class;

    public function definition(): array
    {
        return [];
    }
}
