<?php


namespace App\Adapters\Vierwmodels;

use App\Adapters\ViewModels\JsonViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UserCases\CreateUserOutputPort;
use App\Models\UserEntity;

class CreateUserPresenter implements CreateUserOutputPort
{
    public function userCreated(UserEntity $user): ViewModel
    {
        return new JsonViewModel(['message' => 'User Created!', 'data'=>$user, 'status'=>201 ], 201); 
    }
    public function userExists(UserEntity $user): ViewModel
    {
        return new JsonViewModel(['message' => 'User already Exists!', 'data'=>null, 'status'=>204 ], 204); 
    }
    public function EnableToCreateUser(UserEntity $user): ViewModel
    {
        return new JsonViewModel(['message' => 'Enable To create User', 'data'=>null, 'status'=>204 ], 204); 
    }
}