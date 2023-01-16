<?php

declare(strict_types=1);

namespace App\Providers;

use Domain\Blogging\Projectors\PostProjector;
use Domain\Blogging\Reactors\PostReactor;
use Illuminate\Support\ServiceProvider;
use Spatie\EventSourcing\Facades\Projectionist;

class EventSourcingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Projectionist::addProjectors(projectors: [
            PostProjector::class
        ]);

        Projectionist::addReactors(reactors: [
            PostReactor::class,
        ]);
    }
}
