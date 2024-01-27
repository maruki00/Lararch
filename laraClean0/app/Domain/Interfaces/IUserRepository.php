<?php

namespace App\Domain\Interfaces;

use App\Models\UserEntity;

interface IUserRepository
{
    public function create(UserEntity $user);
    public function exists(UserEntity $user);
}
