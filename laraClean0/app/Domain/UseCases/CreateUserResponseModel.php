<?php

namespace App\Domain\UseCases;

use App\Models\UserEntity;

class CreateUserResponseModel
{
    public function __construct(private readonly UserEntity $userEntity)
    {

    }

    public function getResponse(): UserEntity
    {
        return $this->userEntity;
    }

}
