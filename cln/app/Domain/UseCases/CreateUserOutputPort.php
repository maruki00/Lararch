<?php


namespace App\Domain\UseCases;
use App\Models\UserEntity;
use App\Domain\Interfaces\ViewModel;


interface CreateUserOutputPort{
    public function userCreated(UserEntity $user): ViewModel;
    public function userExists(UserEntity $user): ViewModel;
    public function enableToCreateUser(UserEntity $user): ViewModel;
}