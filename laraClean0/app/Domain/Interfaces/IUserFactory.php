<?php


namespace App\Domain\Interfaces;

use App\Models\UserEntity;
use Illuminate\Support\Arr;

interface IUserFactory{
    public function make(array $attributes): UserEntity;
}