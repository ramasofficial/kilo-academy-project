<?php

namespace App\Services\OcrReader\DTO;

class Image
{
    private $image;

    public function __construct(string $image)
    {
        $this->image = $image;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }
}
