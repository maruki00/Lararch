<?php


namespace App\Factories;

use App\Domain\Interfaces\IUserFactory;
use App\Models\EmailValueObjet;
use App\Models\PasswordValueObject;
use App\Models\User;
use App\Models\UserEntity;

class UserFactory implements IUserFactory
{
    public function make(array $attruibutes): UserEntity
    {
        $user = new User();
        $user->setName($attruibutes['name']);
        $user->setEmail(new EmailValueObjet($attruibutes['name']));
        $user->setPassword(new PasswordValueObject($attruibutes['name']));
        return $user;
    }
}