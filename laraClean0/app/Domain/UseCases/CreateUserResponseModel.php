<?php


namespace App\Domain\UseCases;

use App\Domain\Interfaces\UserEntity;

class CreateUserResponseModel{
    public function __construct(public UserEntity $user)
    {}

    public function getResponse():UserEntity
    {
        return $this->user;
    }
}