<?php

namespace App\Domain\Interfaces;



interface UserEntity
{
    public function getName();
    public function getEmail();
    public function getPassword();
}