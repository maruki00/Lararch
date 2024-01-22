<?php



namespace App\Domain\Interfaces;



interface UserRepository{
    public function create(UserEntity $user):UserEntity;
    public function exists(UserEntity $user):bool;
}