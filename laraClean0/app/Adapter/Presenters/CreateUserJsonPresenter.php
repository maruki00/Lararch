<?php

namespace App\Adapter\Presenters;

use App\Adapter\ViewModels\JsonViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserOutputPort;
use App\Domain\UseCases\CreateUserResponseModel;


class CreateUserJsonPresenter implements CreateUserOutputPort
{

    public final function userCreated(CreateUserResponseModel $responseModel): ViewModel
    {
        return new JsonViewModel(['message' => 'Success', 'data'=>$responseModel->getUser(), 'status'=> 200], 200);
    }


    public final function userExists(CreateUserResponseModel $responseModel): ViewModel
    {
        return new JsonViewModel(['message' => 'Success', 'data'=>null, 'status'=> 204], 204);
    }

    public final function errorMakingUser(CreateUserResponseModel $responseModel): ViewModel
    {
        return new JsonViewModel(['message' => 'Error', 'data'=>null, 'status'=> 400], 400);
    }
}
