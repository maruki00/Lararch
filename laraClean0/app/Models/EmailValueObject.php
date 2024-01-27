<?php

namespace App\Models;



class EmailValueObject
{
    private string $value;
    public function __construct(string $email)
    {
        $this->value = $email;
    }

    
    public function __toString()
    {
        return $this->value;
    }
}