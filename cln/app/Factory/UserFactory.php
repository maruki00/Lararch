<?php



namespace App\Factory;
use App\Domain\Interfaces\IUserFactory;
use App\Models\EmailValueObject;
use App\Models\PasswordValueObject;
use App\Models\User;
use App\Models\UserEntity;


class UserFactory implements IUserFactory
{
    public final function make(array $attributes): UserEntity
    {
        $user = new User();
        $user->setName($attributes['name']);
        $user->setEmail(new EmailValueObject($attributes['email']));
        $user->setPassword(new PasswordValueObject($attributes['password']));
        return $user;
    }
}