<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\Interfaces\ViewModel;

class CreateUserInteractor implements CreateUserInputPort
{
    public function __construct(
        private readonly CreateUserOutputPort $outputPort,
        private readonly IUserRepository $repository,
        private readonly IUserFactory $factory
    ){}


    public function createUser(CreateUserRequestModel $model): ViewModel
    {
        $user = $this->factory->make([
            'name'      => $model->getName(),
            'email'     => $model->getEmail(),
            'password'  => $model->getPassword()
        ]);
        if($this->repository->exists($user)){
            return $this->outputPort->userExists(new CreateUserResponseModel($user));
        }
        if(!$this->repository->create($user)){
            return $this->outputPort->errorMakingUser(new CreateUserResponseModel($user));
        }
        return $this->outputPort->userCreated(new CreateUserResponseModel($user));
    }
}
