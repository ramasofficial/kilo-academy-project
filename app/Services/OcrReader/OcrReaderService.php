<?php

namespace App\Services\OcrReader;

use App\Services\OcrReader\DTO\Image;
use App\Services\OcrReader\Client\ClientInterface;

class OcrReaderService
{
    private $image;

    private $client;

    public function __construct(Image $image, ClientInterface $client)
    {
        $this->image = $image;
        $this->client = $client;
    }

    public function process()
    {
        $content = $this->client->getContent($this->image->getImage());

        return $content;
    }
}
