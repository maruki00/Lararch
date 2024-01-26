<?php


namespace App\Domain\UseCases;


interface CreateUserInputPort{
    public function createUser(CreateUserRequestModel $requestModel);
}