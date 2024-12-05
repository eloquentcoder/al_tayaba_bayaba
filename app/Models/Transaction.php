<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $guarded = [];

      /**
     * Accessor for a unique ID based on the transaction ID.
     *
     * @return string
     */
    public function getUniqueIdAttribute(): string
    {
        return 'ALT' . str_pad($this->id, 3, '0', STR_PAD_LEFT);
    }

    /**
     * Accessor for the formatted transaction type.
     *
     * @return string
     */
    public function getFormattedTypeAttribute(): string
    {
        return Str::title(str_replace('_', ' ', $this->type));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
