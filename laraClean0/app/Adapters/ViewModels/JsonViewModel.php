<?php


namespace App\Adapters\ViewModels;

use App\Domain\Interfaces\ViewModel;
use Illuminate\Http\JsonResponse;

class JsonViewModel implements ViewModel
{
    public function __construct(
        private readonly mixed $data,
        private readonly int $status=200 
    ){}

    public function getResponse(): JsonResponse
    {
        return response()->json($this->data, $this->status);
    }
}