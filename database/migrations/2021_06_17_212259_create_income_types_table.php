<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateIncomeTypesTable extends Migration
{
    public function up(): void
    {
        Schema::create('income_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('income_types');
    }
}
