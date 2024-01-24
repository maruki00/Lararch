<?php

namespace App\Http\Controllers;

use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserInputPort;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function __construct(private CreateUserInputPort $in){}


    public function __invoke(CreateUserRequest $request){
    
        $response = $this->in->createUser($request->validated());


        if($response instanceof ViewModel){
            return $request->getResponse();
        }
    }
}
