<?php

namespace App\Services\OcrReader\Client;

interface ClientInterface
{
    public function getContent(string $image);
}
