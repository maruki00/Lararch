<?php


namespace App\Domain\Interfaces;



interface IUserFactory
{
    public function make(array $attributes):UserEntity;
}