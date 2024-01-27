<?php

namespace App\Http\Controllers;

use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserRequestModel;
use App\Http\Requests\CreateUserRequest;


class CreateUserController extends Controller
{
    public function __construct(private CreateUserInputPort $in){}


    public function __invoke(CreateUserRequest $request){
    
        $data = [
            'name' => 'roxcor',
            'email' => 'abcde@mail.com',
            'password' => 'rororor',
        ];
        $response = $this->in->createUser(new CreateUserRequestModel($data));
        return ($response->getResponse());
        return $response->getResponse();

    }
}
