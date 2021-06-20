<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class ExpenseTypeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('expense_types')->insert(['name' => 'Podatek VAT']);
        DB::table('expense_types')->insert(['name' => 'Podatek PIT']);
        DB::table('expense_types')->insert(['name' => 'Zakupy firmowe']);
        DB::table('expense_types')->insert(['name' => 'Faktura VAT']);
    }
}
