<?php

namespace App\Services\OcrReader\Client;

use App\Services\OcrReader\DTO\Image;

class RapidApiClient implements ClientInterface
{
    public function getContent(string $image)
    {
        return $this->encodeImage($image);
    }

    private function encodeImage($image): string
    {
        $options = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ];

        $content = file_get_contents($image, false, stream_context_create($options));

        return base64_encode($content);
    }
}
