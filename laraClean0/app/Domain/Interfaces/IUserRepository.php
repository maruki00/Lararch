<?php

namespace App\Domain\Interfaces;

use App\Models\UserEntity;
use PhpParser\Node\Expr\Cast\Bool_;

interface IUserRepository
{
    public function create(UserEntity $user): UserEntity;
    public function exists(UserEntity $user): bool;
}
