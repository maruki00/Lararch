<?php



namespace App\Adapter\Presenters;
use App\Adapter\ViewModel\JsonViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\CreateUserOutPutPort;
use App\Domain\UseCases\CreateUserResponseModel;



class CreateUserJsonPresenter implements CreateUserOutPutPort
{

    public function userCreated(CreateUserResponseModel $model): ViewModel
    {
        return new JsonViewModel(response()->json($model->getUser(), 200));
    }
    public function userExists(CreateUserResponseModel $model): ViewModel
    {
        return new JsonViewModel(response()->json(['message'=>'User Already exists'], 400));
    }
    public function unableToCreateUser(CreateUserResponseModel $model): ViewModel
    {
        return new JsonViewModel(response()->json(['message'=>'enable to create the user'], 500));
    }
}