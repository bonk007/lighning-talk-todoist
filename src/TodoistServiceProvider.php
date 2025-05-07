<?php

namespace Todoist;

use Illuminate\Support\ServiceProvider;

class TodoistServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ .'/../database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/todoist.php', 'todoist');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'todoist');
    }

    protected function bootViews()
    {

    }
}
