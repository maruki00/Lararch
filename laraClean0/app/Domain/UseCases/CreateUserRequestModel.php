<?php

namespace App\Domain\UseCases;

use App\Models\EmailValueObject;
use App\Models\PasswordValueObject;
use JetBrains\PhpStorm\Pure;

class CreateUserRequestModel
{
    public function __construct(private readonly array $attributes)
    {
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    #[Pure] public function getEmail(): EmailValueObject
    {
        return new EmailValueObject($this->attributes['email'] ?? '');
    }

    #[Pure] public function getPassword(): PasswordValueObject
    {
        return new PasswordValueObject($this->attributes['password'] ?? '');
    }
}
