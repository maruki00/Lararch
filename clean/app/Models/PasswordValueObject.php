<?php


namespace App\Models;



class PasswordValueObject{
    public string $password;

    public function __construct(string $password){
        $this->password = $password;
    }

    public function __toString(){
        return $this->password;
    }
}