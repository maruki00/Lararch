<?php


namespace App\Domain\Interfaces;



interface UserEntity{
    public function setName(string $name):void;

    public function setPasswordAttribute($value):void;

    public function setEmail(string $email):void ;

    public function getEmail():EmailValueObject ;
    public function getPassword():PasswordValueObject ;

    public function getName():string ;
}