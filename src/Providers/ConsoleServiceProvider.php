<?php

namespace DOOP\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use DOOP\Modules\Commands\CommandCommand;
use DOOP\Modules\Commands\ControllerCommand;
use DOOP\Modules\Commands\DisableCommand;
use DOOP\Modules\Commands\DumpCommand;
use DOOP\Modules\Commands\EnableCommand;
use DOOP\Modules\Commands\GenerateEventCommand;
use DOOP\Modules\Commands\GenerateJobCommand;
use DOOP\Modules\Commands\GenerateListenerCommand;
use DOOP\Modules\Commands\GenerateMailCommand;
use DOOP\Modules\Commands\GenerateMiddlewareCommand;
use DOOP\Modules\Commands\GenerateNotificationCommand;
use DOOP\Modules\Commands\GenerateProviderCommand;
use DOOP\Modules\Commands\GenerateRouteProviderCommand;
use DOOP\Modules\Commands\InstallCommand;
use DOOP\Modules\Commands\ListCommand;
use DOOP\Modules\Commands\MakeCommand;
use DOOP\Modules\Commands\MakeRequestCommand;
use DOOP\Modules\Commands\MigrateCommand;
use DOOP\Modules\Commands\MigrateRefreshCommand;
use DOOP\Modules\Commands\MigrateResetCommand;
use DOOP\Modules\Commands\MigrateRollbackCommand;
use DOOP\Modules\Commands\MigrationCommand;
use DOOP\Modules\Commands\ModelCommand;
use DOOP\Modules\Commands\PublishCommand;
use DOOP\Modules\Commands\PublishConfigurationCommand;
use DOOP\Modules\Commands\PublishMigrationCommand;
use DOOP\Modules\Commands\PublishTranslationCommand;
use DOOP\Modules\Commands\SeedCommand;
use DOOP\Modules\Commands\SeedMakeCommand;
use DOOP\Modules\Commands\SetupCommand;
use DOOP\Modules\Commands\UpdateCommand;
use DOOP\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        MakeCommand::class,
        CommandCommand::class,
        ControllerCommand::class,
        DisableCommand::class,
        EnableCommand::class,
        GenerateEventCommand::class,
        GenerateListenerCommand::class,
        GenerateMiddlewareCommand::class,
        GenerateProviderCommand::class,
        GenerateRouteProviderCommand::class,
        InstallCommand::class,
        ListCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrationCommand::class,
        ModelCommand::class,
        PublishCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        DumpCommand::class,
        MakeRequestCommand::class,
        PublishConfigurationCommand::class,
        GenerateJobCommand::class,
        GenerateMailCommand::class,
        GenerateNotificationCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
