<?php


namespace App\Services;
use App\Domain\Interfaces\IUserRepository;
use App\Factory\UserFactory;
use App\Repositories\UserRepository;


class UserService{
    public function __construct(private readonly IUserRepository $repos){}
    public function create(array $data)
    {
        $user = (new UserFactory)->make($data);
        if($this->repos->exists($user)){
            return ['data' => 'UserExists'];
        }
        if(!$this->repos->create($user))
        {
            return ['data' => 'Enable To create the user'];
        }
        return ['data' => 'User Created'];
        
    }
}