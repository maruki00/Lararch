<?php

namespace App\Domain\UseCases;

use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\Interfaces\UserFactory;

class CreateUserInteractor
{
    public function __construct(
        private CreateUserOutputPort $outport,
        private CreateUserInputPort  $inport,
        private IUserRepository $repository,
        private IUserFactory $factory
    )
    {}


    public function CraeteUser(CreateUserRequestModel $model){
        $user = $this->factory->make([
            'name' => $model->getName(),
            'email' => $model->getEmail()
        ]);

        if($this->repository->exists($user)){
            return $this->outport->userExists(new CreateUserResponseModel($user));
        }


    }


}