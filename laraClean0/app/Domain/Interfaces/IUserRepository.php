<?php


namespace App\Domain\Interfaces;

use App\Models\UserEntity;

interface IUserRepository{
    public function create(UserEntity $user): UserEntity;
    public function exists(UserEntity $user): bool;
}