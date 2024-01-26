<?php

namespace App\Providers;

use App\Adapters\Presenters\CreateUserJsonPresenter;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserInteractor;
use App\Domain\UseCases\CreateUserOutputPort;
use App\Domain\Interfaces\IUserFactory;
use App\Factory\UserFactory;
use App\Repositories\UserRepository;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUserRepository::class,         UserRepository::class);
        $this->app->bind(IUserFactory::class,            UserFactory::class);
        $this->app->bind(CreateUserOutputPort::class,    CreateUserJsonPresenter::class);
        $this->app->bind(CreateUserInputPort::class,     CreateUserInteractor::class);

        // $this->app
        //     ->when(HttpControllers\CreateUserController::class)
        //     ->needs(UseCases\CreateUser\CreateUserInputPort::class)
        //     ->give(function ($app) {
        //         return $app->make(UseCases\CreateUser\CreateUserInteractor::class, [
        //             'output' => $app->make(Presenters\CreateUserHttpPresenter::class),
        //         ]);
        //     });

        // $this->app
        //     ->when(Commands\CreateUserCommand::class)
        //     ->needs(UseCases\CreateUser\CreateUserInputPort::class)
        //     ->give(function ($app) {
        //         return $app->make(UseCases\CreateUser\CreateUserInteractor::class, [
        //             'output' => $app->make(Presenters\CreateUserCliPresenter::class),
        //         ]);
        //     });


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
