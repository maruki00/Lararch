<?php

namespace App\Adapters\Presenters;
use App\Adapters\ViewModel\JsonViewModels;
use App\Adapters\ViewModels\JsonViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserOutputPort;
use App\Models\UserEntity;



class CreateUserJsonPresenter implements CreateUserOutputPort
{
    public function userCreated(UserEntity $user): ViewModel
    {
        return new JsonViewModel(['data' => $user]);
    }
    public function userExists(UserEntity $user): ViewModel{
        return new JsonViewModel(['data' => "User Already exists"]);
    }
    public function enableToCreateUser(UserEntity $user): ViewModel{
        return new JsonViewModel(['data' => "Enable To Create User"]);
    }
}