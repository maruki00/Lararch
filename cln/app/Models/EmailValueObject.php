<?php

namespace App\Models;



class EmailValueObject{
    public function __construct(
        private string $value
    ){
        if(!preg_match('/(.+)@(.+)(\.)(.+)/', $value, $out)){
            throw new \DomainException('Invalid Email');
        }
    }

    public function __toString()
    {
        return $this->value;
    }

}