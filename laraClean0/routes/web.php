<?php

use App\Http\Controllers\CreateUserController;
use Illuminate\Support\Facades\Route;



Route::get('/', CreateUserController::class);