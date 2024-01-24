<?php


namespace App\Repositories;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\Interfaces\UserEntity;


class Userespository implements IUserRepository
{
    private array $users = [];
    public function create(UserEntity $user) {
        $this->users[] = $user;
    }   

    public function exists(UserEntity $user) {
        return in_array($user, $this->users);
    }
}