<?php

namespace App\Providers;

use App\Nova\Dashboards\Main;
use Bernhardh\NovaTranslationEditor\NovaTranslationEditor;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Outl1ne\MenuBuilder\MenuBuilder;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    protected function gate(): void
    {
        Gate::define('viewNova', function ($user) {
            return $user;
        });
    }

    protected function dashboards(): array
    {
        return [
            new Main(),
        ];
    }

    public function tools(): array
    {
        return [
            new NovaTranslationEditor(),
            MenuBuilder::make(),
        ];
    }
}
