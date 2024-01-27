<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\ViewModel;

interface CreateUserInputPort
{
    public function createUser(CreateUserRequestModel $model): ViewModel;
}
