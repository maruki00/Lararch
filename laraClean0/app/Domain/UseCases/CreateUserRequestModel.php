<?php



namespace App\Domain\UseCases;



class CreateUserRequestModel{
    public function __construct(public array $attributes=[])
    {
        
    }


    public function getName()
    {
        return $this->attributes['name'] ?? '';
    }

    public function getEmail()
    {
        return $this->attributes['email'] ?? '';
    }

    public function getPassword()
    {
        return $this->attributes['password'] ?? '';
    }


}