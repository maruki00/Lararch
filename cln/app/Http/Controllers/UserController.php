<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private readonly UserService $service){}
    public function create(){
        $result = $this->service->create([
            'name' => 'abuddlah',
            'email' => 'abdo@mail.com',
            'password' => '12345'
        ]);
        return response()->json($result, 200);
    }
}
