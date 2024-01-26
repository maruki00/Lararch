<?php


namespace App\Models;


interface UserEntity
{
    public function getName(): string;
    public function getEmail(): EmailValueObject;
    public function getPassword(): PasswordValueObject;

    public function setName(string $name);
    public function setEmail(EmailValueObject $email);
    public function setPassword(PasswordValueObject $password);

}