<?php

namespace App\Models;



interface UserEntity
{
    public function getName();
    public function getEmail();
    public function getPassword();
}