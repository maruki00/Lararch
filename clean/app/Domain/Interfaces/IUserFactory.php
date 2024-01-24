<?php


namespace App\Domain\Interfaces;



interface IUserFactory{
    public function create(array $data): UserEntity;
}