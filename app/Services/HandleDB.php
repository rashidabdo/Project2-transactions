<?php

namespace App\Services;

use App\Http\Resources\TransactionResource;
use App\Models\Transaction;

class HandleDB implements HandlingDataInterface
{
    public function handle()
    {
        return TransactionResource::collection(Transaction::all());
    }
}
