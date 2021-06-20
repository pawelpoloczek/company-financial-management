<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'net',
        'gross',
        'tax',
        'tax_rate_id',
        'expense_type_id',
        'description',
    ];
}
