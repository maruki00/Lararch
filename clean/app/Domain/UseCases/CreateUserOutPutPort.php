<?php


namespace App\Domain\UseCases;
use App\Domain\UseCases\CreateUserResponseModel;

interface CreateUserOutPutPort
{
   public function userCreated(CreateUserResponseModel $model): ViewModel;
   public function userExists(CreateUserResponseModel $model): ViewModel;
   public function unableToCreateUser(CreateUserResponseModel $model): ViewModel;
}