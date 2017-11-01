<?php

namespace DOOP\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use DOOP\Modules\Contracts\RepositoryInterface;
use DOOP\Modules\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
