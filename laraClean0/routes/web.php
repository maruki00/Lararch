<?php

use App\Http\Controllers\CreateUserController;
use Illuminate\Support\Facades\Route;



Route::get('/', CreateUserController::class);
Route::get('/usual', function(){

    $factor = new \App\Factories\UserFactory();
    $repository = new \App\Repositories\UserRepository();
    $user = [
        'name' => 'abdullah',
        'email' => 'email@mail.com',
        'password' => '12345'
    ];


//    if($repository->exists($user)){
//        return response()->json($user,204);
//    }
//    if(!$repository->create($user)){
//        return response()->json(null,400);
//    }
    return response()->json($user,201);
});
