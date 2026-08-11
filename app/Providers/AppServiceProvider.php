<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\View\Composers\TenantUserSidebarComposer;
use App\View\Composers\TenantAdminSidebarComposer;
use App\View\Composers\TenantUserDashboardComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(
        'dashboard.user.body.sidebar',
        TenantUserSidebarComposer::class
        );

        View::composer(
        'dashboard.user.tenant_index',
        TenantUserDashboardComposer::class
        );

        View::composer(
        'dashboard.admin.body.sidebar',
        TenantAdminSidebarComposer::class
        );
    }
}
