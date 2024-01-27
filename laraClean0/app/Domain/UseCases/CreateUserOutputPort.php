<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\ViewModel;
use App\Models\UserEntity;

interface CreateUserOutputPort
{
    public function userCreated(UserEntity $user): ViewModel;
    public function userExists(UserEntity $user): ViewModel;
    public function EnableToCreateUser(UserEntity $user): ViewModel;
}

