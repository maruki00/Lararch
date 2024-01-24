<?php

namespace App\Http\Controllers;

use App\Adapter\ViewModel\JsonViewModel;
use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserRequestModel;
use App\Http\Requests\CreateUserRequest;


class CreateUserController extends Controller
{
    public function __construct(
        private CreateUserInputPort $output
    ){}


    public function __invoke(CreateUserRequest $request){
        $viewModel = $this->output->createUser(new CreateUserRequestModel([
            "name"=> 'abdellah',
            "email" => 'password',
            'password' => '123',
        ]));

        if($viewModel instanceof JsonViewModel){
            return $viewModel->getResponse();
        }
    }
}
