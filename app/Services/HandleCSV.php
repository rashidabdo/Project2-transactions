<?php

namespace App\Services;

class HandleCSV implements HandlingDataInterface
{
    public function handle()
    {
        $transactionsFile = database_path() . '/seeders/transactions.csv';
        if (file_exists($transactionsFile)) {
            $file = fopen($transactionsFile, 'r');
            $header = fgetcsv($file);
            $transactions = [];
            while ($data = fgetcsv($file)) {
                $transactions[$data[0]] = array_combine($header, $data);
            }
            return response()->json(['source' => 'csv', 'data' => $transactions], 200);
        }

        return response()->json(['source' => 'csv', 'data' => 'Source file not existed!'], 400);
    }
}
