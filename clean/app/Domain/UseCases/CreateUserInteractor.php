<?php

namespace App\Domain\UseCases;
use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;


class CreateUserInteractor
{
    public function __construct(
        private readonly CreateUserOutPutPort $outPutPort,
        private readonly IUserRepository $repository,
        private readonly IUserFactory $factory,
    ){}


    public function handle(CreateUserRequestModel $request)
    {
        $user = $this->factory->create([
            "name"     => $request->getName(),
            "email"    => $request->getEmail(),
            "password" => $request->getPassword(),
        ]);
    
        if($this->repository->exists($user)){
            return $this->outPutPort->userExists(new CreateUserResponseModel($user));
        }

        if(!$this->repository->create($user)){
            return $this->outPutPort->unableToCreateUser(new CreateUserResponseModel($user));
        }

        return $this->outPutPort->userCreated(new CreateUserResponseModel($user));
    }

}