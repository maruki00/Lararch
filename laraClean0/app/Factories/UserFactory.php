<?php

namespace App\Factories;

use App\Domain\Interfaces\IUserFactory;
use App\Models\User;
use App\Models\UserEntity;
use function PHPUnit\Framework\returnArgument;

class UserFactory implements IUserFactory
{

    public function make(array $attributes): UserEntity
    {
        return new User($attributes);

        $user->setName($attributes['name']);
        $user->setEmail($attributes['email']);
        $user->setPassword($attributes['password']);
        return $user;
    }
}
