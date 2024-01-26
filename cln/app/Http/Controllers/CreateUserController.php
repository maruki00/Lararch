<?php

namespace App\Http\Controllers;

use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserRequestModel;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function __construct(private readonly CreateUserInputPort $inputport){}

    public function __invoke(){
        $view = $this->inputport->createUser(new CreateUserRequestModel([
            'name'     => 'abdullah',
            'email'    => 'abdo@mail.com',
            'password' => '12345',
        ]));

        return $view->getResponse();
    }
}
