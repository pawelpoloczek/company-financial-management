<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class IncomeTypeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('income_types')->insert(['name' => 'Sprzedaż usługi']);
        DB::table('income_types')->insert(['name' => 'Sprzedaż towaru']);
        DB::table('income_types')->insert(['name' => 'Pożyczka']);
        DB::table('income_types')->insert(['name' => 'Zwrot podatku']);
    }
}
