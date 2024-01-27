<?php

namespace App\Http\Controllers;

use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserRequestModel;
use Illuminate\Http\JsonResponse;

class CreateUserController extends Controller
{
    public function  __construct(
        private readonly CreateUserInputPort $inputPort
    )
    {
    }

    public function __invoke():JsonResponse
    {
        $response = $this->inputPort->createUser(new CreateUserRequestModel([
            'name' => 'abdullah',
            'email' => 'email@mail.com',
            'password' => 'passw0rd!'
        ]));
        return $response->getResponse();
    }
}
