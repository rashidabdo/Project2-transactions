<?php

namespace App\Http\Controllers;

use App\Services\RetrievingDataFactory;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function getData(Request $request)
    {
        if ($request->has('source') && in_array($request->source, ['db', 'csv'])) {
            $retrievingDataFactory = new RetrievingDataFactory();
            return $retrievingDataFactory->retrievingData($request->source);
        } else {
            throw new \Exception('Source not existed!');
        }
    }
}
