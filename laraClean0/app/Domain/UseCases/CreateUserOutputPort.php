<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\ViewModel;

interface CreateUserOutputPort
{
    public function userCreated(CreateUserResponseModel $responseModel): ViewModel;
    public function userExists(CreateUserResponseModel $responseModel): ViewModel;
    public function errorMakingUser(CreateUserResponseModel $responseModel): ViewModel;
}
