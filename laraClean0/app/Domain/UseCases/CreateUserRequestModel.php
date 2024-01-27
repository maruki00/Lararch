<?php

namespace App\Domain\UseCases;

use App\Models\EmailValueObject;
use App\Models\PasswordValueObject;

class CreateUserRequestModel
{
    public function __construct(public readonly array $attributes)
    {
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function getEmail(): EmailValueObject
    {
        return new EmailValueObject($this->attributes['email'] ?? '');
    }

    public function getPassword(): PasswordValueObject
    {
        return new PasswordValueObject($this->attributes['password'] ?? '');
    }
}
