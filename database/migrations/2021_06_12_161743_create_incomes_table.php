<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('date');
            $table->string('name');
            $table->decimal('net',10,4);
            $table->decimal('gross', 10, 4);
            $table->decimal('tax', 10, 4);
            $table->longText('description')->nullable();
            $table->integer('tax_rate_id');
            $table->integer('income_type_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
}
