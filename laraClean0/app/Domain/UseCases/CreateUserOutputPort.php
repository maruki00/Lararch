<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\ViewModel;

interface CreateUserOutputPort{
    public function userCreated(CreateUserResponseModel $model):ViewModel;
    public function userExists(CreateUserResponseModel $model):ViewModel;
    public function UnableToCreateUSer(CreateUserResponseModel $model):ViewModel;

}