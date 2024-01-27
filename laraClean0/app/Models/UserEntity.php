<?php


namespace App\Models;


use App\Models\EmailValueObjet;
use App\Models\PasswordValueObject;


interface UserEntity{
    public function getName(): string ;
    public function getEmail(): EmailValueObjet;
    public function getPassword(): PasswordValueObject;
    public function setName(string $name):void;
    public function setEmail(EmailValueObjet $emai): void;
    public function setPassword(PasswordValueObject $password): void;
}