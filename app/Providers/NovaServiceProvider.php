<?php

namespace App\Providers;

use App\Nova\Vms;
use App\Nova\User;
use App\Nova\Account;
use App\Nova\License;
use App\Nova\Customer;
use Laravel\Nova\Nova;
use App\Nova\Placement;
use App\Nova\PayPackage;
use App\Nova\Submission;
use App\Nova\JobVerified;
use Illuminate\Http\Request;
use App\Nova\EducationHistory;
use Laravel\Nova\Menu\MenuItem;
use App\Nova\ClinicalExperience;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\MenuSection;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    
        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                    MenuItem::resource(Customer::class),
                    MenuItem::resource(User::class),
                    MenuItem::resource(Account::class),
                    MenuItem::resource(JobVerified::class),
                    // MenuItem::resource(PayPackage::class),
                    MenuItem::resource(Submission::class),
                    MenuItem::resource(Placement::class),
                    // MenuItem::resource(Vms::class),

                
                     MenuSection::make('Content', [
                    // MenuItem::resource(Series::class),
                    // MenuItem::resource(Release::class),
                ])->icon('document-text')->collapsable(),
            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                

            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
