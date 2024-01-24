<?php

namespace App\Domain\UseCases;
use App\Factories\UserFactory;

class CreateUserInteractor
{
    public function handle(
        private readonly CreateUserOutPutPort $outPutPort,
        private readonly UserRep $inputPort,
        private readonly UserFactory $factory
    )
    {

    }
}