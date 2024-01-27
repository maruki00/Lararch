<?php

namespace App\Factories;

use App\Domain\Interfaces\IUserFactory;
use App\Models\User;
use App\Models\UserEntity;

class UserFactory implements IUserFactory
{

    public function make(array $attributes): UserEntity
    {
        $user = new User;
        $user->setName($attributes['name']);
        $user->setEmail($attributes['email']);
        $user->setPassword($attributes['password']);
        return $user;
    }
}
