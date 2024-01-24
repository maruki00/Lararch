<?php

namespace App\Providers;

use App\Adapter\Presenters\CreateUserJsonPresenter;
use App\Adapter\Presenters\CreateUserPresenter;
use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\UseCases\CreateUserInteractor;
use App\Http\Controllers\CreateUserController;
use App\Repositories\Userespository;
use App\Repositories\UserRespository;
use Database\Factories\UserFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            IUserRepository::class,
            UserRespository::class
        );

        $this->app->bind(
            IUserFactory::class,
            UserFactory::class
        );

        $this->app
             ->when(CreateUserController::class)
             ->needs(CreateUserInteractor::class)
             ->give(function ($app) {
                return $app->make(CreateUserInteractor::class,[
                    'output' => $app->make(CreateUserJsonPresenter::class)
                ]);
             });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
