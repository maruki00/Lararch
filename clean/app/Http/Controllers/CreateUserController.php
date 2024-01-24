<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function __construct(){

    }


    public function __invoke(CreateUserRequest $request){
        return "Helloo world";
    }
}
