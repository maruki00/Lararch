<?php

namespace App\Repositories;

use App\Domain\Interfaces\IUserRepository;
use App\Models\UserEntity;

class UserRepository implements IUserRepository
{
    private array $users = [];
    public function create(UserEntity $user): UserEntity
    {
        $this->users []= $user;
        return $user;
    }

    public function exists(UserEntity $user): bool
    {
        return in_array($user, $this->users);
    }
}
