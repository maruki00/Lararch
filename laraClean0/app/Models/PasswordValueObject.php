<?php



namespace App\Models;



class PasswordValueObject
{
    private string $value;
    public function __construct(string $value)
    {
        $this->value = sha1($value);
    }

    public function __toString()
    {
        return $this->value;
    }
}