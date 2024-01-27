<?php

namespace App\Adapter\Presenters;

use App\Adapter\ViewModels\JsonViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserOutputPort;
use App\Models\UserEntity;
use JetBrains\PhpStorm\Pure;

class CreateUserJsonPresenter implements CreateUserOutputPort
{

    #[Pure] public final function userCreated(UserEntity $user): ViewModel
    {
        return new JsonViewModel(['message' => 'Success', 'data'=>$user, 'status'=> 200], 200);
    }

    /**
     * @param UserEntity $user
     * @return ViewModel
     */
    public final function userExists(UserEntity $user): ViewModel
    {
        return new JsonViewModel(['message' => 'Success', 'data'=>null, 'status'=> 200], 204);
    }

    public final function errorMakingUser(UserEntity $user): ViewModel
    {
        return new JsonViewModel(['message' => 'Error', 'data'=>null, 'status'=> 200], 400);
    }
}
