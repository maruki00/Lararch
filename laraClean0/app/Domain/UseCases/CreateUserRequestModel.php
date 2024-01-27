<?php


namespace App\Domain\UserCases;

use App\Models\EmailValueObjet;
use App\Models\PasswordValueObject;

class CreateUserRequestModel{
    public function __construct(private readonly array $attributes)
    { }

    public function getName():string
    {
        return $this->attributes['name'] ?? '';
    }

    public function getEmail(): EmailValueObjet
    {
        return new EmailValueObjet($attributes['name'] ?? '');
    }

    public function getPassword():PasswordValueObject
    {
        return new PasswordValueObject($this->attributes['password'] ?? '');
    }

}