<?php

use App\Doamin\Contracts\UseCases\AppOutputPortInterface;
use Illuminate\Http\JsonResponse;

class CreateUserHttpPResenter implements AppOutputPortInterface{
    public final function success(): JsonResponse
    {   
        return response()->json([]);
    } 

    public final function error(): JsonResponse
    {
        return response()->json([]);
    }
}