<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    /** @use HasFactory<\Database\Factories\BalanceFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}