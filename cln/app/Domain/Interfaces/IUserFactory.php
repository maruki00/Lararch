<?php



namespace App\Domain\Interfaces;
use App\Models\UserEntity;



interface IUserFactory{
    public function make(array $attributes): UserEntity;
}