<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\ViewModel;

interface CreateUserInputPort {
    public function userCreated(CreateUserRequestModel $model):ViewModel;
    public function userExists(CreateUserResponseModel $model):ViewModel;
}