<?php


namespace App\Domain\UserCases;

use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\Interfaces\ViewModel;
use GuzzleHttp\Promise\Create;

class CreateUserInteractor implements CreateUserInputPort{
    
    public function __construct(
        private readonly IUserFactory $factory,
        private readonly IUserRepository $repository,
        private readonly CreateUserOutputPort $outport
    ){}

    public function createUser(CreateUserRequestModel $requesdtModel): ViewModel
    {
        $user = $this->factory->make([
            'name'      => $requesdtModel->getName(),
            'email'     => $requesdtModel->getEmail(),
            'password'  => $requesdtModel->getPassword(),
        ]); 

        if($this->repository->create($user)){
            return $this->outport->userExists($user);
        }

        if(!$this->repository->create($user)){
            return $this->outport->EnableToCreateUser($user);
        }
        return $this->outport->userCreated($user);
    }
}