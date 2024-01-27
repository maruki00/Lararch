<?php


namespace App\Domain\UserCases;

use App\Domain\Interfaces\ViewModel;
use App\Models\UserEntity;
use GuzzleHttp\Promise\Create;

interface CreateUserInputPort{
    public function createUser(CreateUserRequestModel $model): ViewModel;
}