<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\Interfaces\ViewModel;

class CreateUserInteractor implements CreateUserInputPort
{

    public function __construct(
        private readonly IUserFactory $factory,
        private readonly IUserRepository $repository,
        private readonly CreateUserOutputPort $outputPort
    )
    {
    }


    public function createUser(CreateUserRequestModel $requestModel): ViewModel
    {
        $user = $this->factory->make([
            'name' => $requestModel->getName(),
            'email' => $requestModel->getEmail(),
            'password' => $requestModel->getPassword(),
        ]);

        if($this->repository->exists($user)){
            return $this->outputPort->userExists(new CreateUserResponseModel($user));
        }
        if(!$this->repository->create($user)){
            return $this->outputPort->userNotCreated(new CreateUserResponseModel($user));
        }
        return $this->outputPort->userCreated(new CreateUserResponseModel($user));
    }
}
