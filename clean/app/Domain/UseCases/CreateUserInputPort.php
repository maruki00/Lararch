<?php

namespace App\Domain\UseCases;
use App\Domain\UseCases\CreateUserRequestModel;

interface CreateUserInputPort
{
    public function createUser(CreateUserRequestModel $model);
}