<?php

namespace Baimo\Files\Providers;

use Illuminate\Support\ServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../database/migrations/create_files_table.php.stub' => getMigrationFileName('create_files_table'),
            __DIR__.'/../../database/migrations/create_model_has_files_table.php.stub' => getMigrationFileName('create_model_has_files_table'),
        ], 'migrations');

    }

}
