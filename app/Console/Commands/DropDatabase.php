<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DropDatabase extends Command
{
    protected $signature = 'db:drop {name?}';
    protected $description = 'Drop MySQL database';

    public function handle(): void
    {
        $schemaName = $this->argument('name') ?: config("database.connections.mysql.database");
        $query = "DROP DATABASE IF EXISTS $schemaName;";

        DB::statement($query);

        config(["database.connections.mysql.database" => null]);
    }
}
