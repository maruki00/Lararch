<?php


namespace App\Domain\UseCases;


interface CreateUserOutPutPort
{
   public function userCreated(CreateUserResponseModel $model): ViewModel;
   public function userExists(CreateUserResponseModel $model): ViewModel;
   public function inableToCreateUser(CreateUserResponseModel $model): ViewModel;
}