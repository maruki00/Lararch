<?php

namespace App\Factories;

use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\UserEntity;
use App\Models\User;

class UserFactory implements IUserFactory{
    public function make(array $attributes):UserEntity
    {
        return new User($attributes);
    }
}