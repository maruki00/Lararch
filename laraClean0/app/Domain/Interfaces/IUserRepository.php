<?php



namespace App\Domain\Interfaces;



interface IUserRepository{
    public function create(UserEntity $user):UserEntity;
    public function exists(UserEntity $user):bool;
}