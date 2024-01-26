<?php

namespace App\Adapters\ViewModels;
use App\Domain\Interfaces\ViewModel;



class JsonViewModel implements ViewModel
{
    public function __construct(private readonly mixed $data, public readonly int $status=200){}
    public final function  getResponse(): mixed
    {
        return response()->json($this->data, $this->status);
    }
}