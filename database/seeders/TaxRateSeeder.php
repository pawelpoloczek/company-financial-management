<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class TaxRateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tax_rates')->insert(['name' => 'nd', 'value' => 0.00]);
        DB::table('tax_rates')->insert(['name' => '0%', 'value' => 0.00]);
        DB::table('tax_rates')->insert(['name' => '5%', 'value' => 5.00]);
        DB::table('tax_rates')->insert(['name' => '8%', 'value' => 8.00]);
        DB::table('tax_rates')->insert(['name' => '23%', 'value' => 23.00]);
    }
}
