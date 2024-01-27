<?php

namespace App\Adapters\Presenters;

use App\Adapters\ViewModels\JsonViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserOutputPort;
use App\Domain\UseCases\CreateUserResponseModel;

class CreateUserJsonResponse implements CreateUserOutputPort
{

    public function userCreated(CreateUserResponseModel $model): ViewModel
    {
        return new JsonViewModel($model->getUser(), 200);
    }

    public function userExists(CreateUserResponseModel $model): ViewModel
    {
        return new JsonViewModel(null, 204);

    }

    public function userNotCreated(CreateUserResponseModel $model): ViewModel
    {
        return new JsonViewModel(null, 400);

    }
}
