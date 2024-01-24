<?php

namespace App\Domain\Interfaces;



interface IUserRepository{
    public function create(UserEntity $user);
    public function exists(UserEntity $user);
}