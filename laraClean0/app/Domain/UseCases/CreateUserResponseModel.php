<?php

namespace App\Domain\UseCases;

use App\Models\UserEntity;

class CreateUserResponseModel
{
    public function __construct(private readonly UserEntity $user)
    {
    }

    public function getUser(){
        return $this->user;
    }
}
