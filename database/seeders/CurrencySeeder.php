<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('currencies')->insert(
            [
                'name' => 'Polski złoty',
                'code' => 'PLN',
                'symbol' => 'zł',
            ]
        );
        DB::table('currencies')->insert(
            [
                'name' => 'Dolar amerykański',
                'code' => 'USD',
                'symbol' => '$',
            ]
        );
        DB::table('currencies')->insert(
            [
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
            ]
        );
    }
}
