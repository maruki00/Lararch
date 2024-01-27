<?php


namespace App\Models;


use App\Models\EmailValueObject;
use App\Models\PasswordValueObject;


interface UserEntity{
    public function getName(): string ;
    public function getEmail(): EmailValueObject;
    public function getPassword(): PasswordValueObject;
    public function setName(string $name):void;
    public function setEmail(EmailValueObject $emai): void;
    public function setPassword(PasswordValueObject $password): void;
}