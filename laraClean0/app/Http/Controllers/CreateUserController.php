<?php

namespace App\Http\Controllers;

use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserRequestModel;
use App\Http\Requests\CreateUserRequest;


class CreateUserController extends Controller
{
    public function __construct(private readonly CreateUserInputPort $inputPort)
    {
    }
    public function __invoke()
    {

        $view = $this->inputPort->createUser(new CreateUserRequestModel([
            'name' => 'karu kuma',
            'email' => 'email@email.com',
            'password' => '1245'
        ]));
        return $view->getResponse();
    }
}
