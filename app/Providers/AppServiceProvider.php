<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Company;
use App\Models\Opportunity;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'user' => User::class,
            'opportunity' => Opportunity::class,
            'company' => Company::class,
            'task' => Task::class,
        ]);

        //        Model::unguard();
    }
}
