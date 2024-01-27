<?php

namespace App\Adapter\ViewModels;

use App\Domain\Interfaces\ViewModel;
use Illuminate\Http\JsonResponse;

class JsonViewModel implements ViewModel
{
    public function __construct(private readonly object|array $data, private readonly int $status)
    {
    }

    public final function getResponse(): JsonResponse
    {
        return \response()->json($this->data, $this->status);
    }
}
