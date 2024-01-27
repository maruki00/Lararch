<?php

namespace App\Adapter\ViewModels;

use App\Domain\Interfaces\ViewModel;

class JsonViewModel implements ViewModel
{
    public function __construct(private readonly object|array $data, private readonly int $status)
    {
    }

    public final function getResponse()
    {
        return request()->json($this->data, $this->status);
    }
}
