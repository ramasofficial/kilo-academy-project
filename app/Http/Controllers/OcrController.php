<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OcrReader\DTO\Image;
use App\Services\OcrReader\OcrReaderService;
use App\Services\OcrReader\Client\RapidApiClient;

class OcrController extends Controller
{
    public function index()
    {
        $image = new Image(url('images/test_1.png'));
        $read = new OcrReaderService($image, new RapidApiClient());
        echo $read->process();
    }
}
