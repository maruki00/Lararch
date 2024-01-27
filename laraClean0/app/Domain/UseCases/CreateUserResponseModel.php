<?php


namespace App\Domain\UserCases;

use App\Models\UserEntity;

class CreateUserResponseModel{

    public function __construct(private readonly UserEntity $user){}
    public function getResponse(){
        return $this->user;
    }
}