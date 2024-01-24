<?php


namespace App\Models;



class EmailValueObject{
    public string $email;
    public function __construct(string $email){
        $this->email = $email;
    }

    public function __toString(): string{
        return $this->email;
    }
}