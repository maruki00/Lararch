<?php

namespace App\Providers;

use App\Adapter\Presenters\CreateUserJsonPresenter;
use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserInteractor;
use App\Domain\UseCases\CreateUserOutputPort;
use App\Factories\UserFactory;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUserFactory::class,           UserFactory::class);
        $this->app->bind(IUserRepository::class,        UserRepository::class);
        $this->app->bind(CreateUserInputPort::class,    CreateUserInteractor::class);
        $this->app->bind(CreateUserOutputPort::class,   CreateUserJsonPresenter ::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
