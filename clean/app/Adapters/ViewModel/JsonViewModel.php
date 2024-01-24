<?php


namespace App\Adapter\ViewModel;
use App\Domain\Interfaces\ViewModel;



class JsonViewModel implements ViewModel{
    public function __construct(private mixed $response)
    {
        
    }

    public function getResponse(): mixed
    {
        return $this->response;
    }
}