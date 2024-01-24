<?php


namespace App\Repositories;

use App\Domain\Interfaces\IUserRepository;
use App\Domain\Interfaces\UserEntity;

class UserRepository implements IUserRepository
{
    
    public function create(UserEntity $user):UserEntity
    {
        return $user;
    }
    public function exists(UserEntity $user):bool
    {
        return false;
    }
}