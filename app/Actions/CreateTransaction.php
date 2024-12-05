<?php

namespace App\Actions;

use App\Models\Transaction;
use Illuminate\Support\Str;

class CreateTransaction 
{
    public function handle($type, $amount, $remark, $user_id)
    {
        return Transaction::create([
            'type' => $type,
            'amount' => $amount,
            'transaction_id' => "ALT".Str::upper(Str::random(10)),
            'remark' => $remark,
            'user_id' => $user_id
        ]);
        
    }
}
