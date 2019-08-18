<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\{
    TopicRepository, UserRepository, AddressRepository
};
use App\Repositories\Eloquent\{
    EloquentTopicRepository, EloquentUserRepository, EloquentAddressRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TopicRepository::class, EloquentTopicRepository::class);
        $this->app->bind(UserRepository::class, EloquentUserRepository::class);
        $this->app->bind(AddressRepository::class, EloquentAddressRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
