<?php



namespace App\Domain\UseCases;


class CreateUserRequestModel{
    public function __construct(
        private readonly array $attributes
    ){}

    public function getName() : string{
        return $this->attributes["name"] ?? '';
    }
    public function getEmail() : string{
        return $this->attributes["name"] ?? '';
    }

    public function getPassword() : string{
        return $this->attributes["name"] ?? '';
    }
}