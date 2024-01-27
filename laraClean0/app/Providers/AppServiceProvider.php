<?php

namespace App\Providers;

use App\Adapters\Presenters\CreateUserPresenter;
use App\Domain\Interfaces\IUserFactory;
use App\Domain\Interfaces\IUserRepository;
use App\Domain\UseCases\CreateUserInputPort;
use App\Domain\UseCases\CreateUserInteraction;
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
        $this->app->bind(CreateUserInputPort::class,    CreateUserInteraction::class);
        $this->app->bind(CreateUserOutputPort::class,   CreateUserPresenter::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
