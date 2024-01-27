<?php

namespace App\Domain\UseCases;


use Illuminate\Http\JsonResponse;

class CreateUserResponseModel
{
    public function __construct(
        private readonly mixed $data,
        private readonly int $status
    ){}

    public function getResponse():JsonResponse
    {
        return response()->json($this->data, $this->status);
    }
}
