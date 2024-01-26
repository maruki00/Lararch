<?php


namespace App\Models;



class PasswordValueObject{
    public function __construct(private string $value){
        $this->value = sha1($value);
    }

    public function __toString(){
        return $this->value;
    }
    
}