<?php

namespace App\Doamin\Contracts\UseCases;
use Illuminate\Http\JsonResponse;




interface AppOutputPortInterface{
    public function success(): JsonResponse;
    public function error():   JsonResponse;
}