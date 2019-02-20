<?php

namespace App\Providers;

use App\Repositories\TrackRepository;
use App\Repositories\Interfaces\TrackInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bind the interface to an implementation repository class
     */
    public function register()
    {
        $this->app->bind(
            TrackInterface::class,
            TrackRepository::class
        );
    }
}