<?php


namespace App\Domain\UseCases;
use App\Domain\Interfaces\UserEntity;


class CreateUserResponseModel
{
    public function __construct(
        private readonly UserEntity $user
    ){}

    public function getUser(): UserEntity
    {
        return $this->user;
    }
      
}