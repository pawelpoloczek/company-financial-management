<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

final class CreateDatabase extends Command
{
    protected $signature = 'db:create {name?}';
    protected $description = 'Create a new MySQL database';

    public function handle(): void
    {
        $schema = $this->argument('name') ?: config('database.connections.mysql.database');
        $charset = config('database.connections.mysql.charset', 'utf8mb4');
        $collation = config('database.connections.mysql.collation', 'utf8mb4_unicode_ci');

        config(['database.connections.mysql.database' => null]);

        $query = "CREATE DATABASE IF NOT EXISTS ${schema} CHARACTER SET ${charset} COLLATE ${collation};";

        DB::statement($query);

        config(['database.connections.mysql.database' => $schema]);
    }
}
