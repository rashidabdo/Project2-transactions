<?php

namespace App\Services;

class RetrievingDataFactory implements RetrievingDataInterface
{
    public function retrievingData(string $source)
    {
        $handlerClass =  $source =='db' ? new HandleDB() : new HandleCSV();
        return $handlerClass->handle();
    }
}
