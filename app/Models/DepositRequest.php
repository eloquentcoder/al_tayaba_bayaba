<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositRequest extends Model
{
    /** @use HasFactory<\Database\Factories\DepositRequestFactory> */
    use HasFactory;

    protected $guarded = [];

    public function getPaymentProofUrlAttribute()
    {
        return asset('storage/' . $this->payment_proof);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
