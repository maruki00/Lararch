<?php


namespace App\Domain\Interfaces;


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