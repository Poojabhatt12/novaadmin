<?php

namespace App\Nova;

use App\Models\Account;
use App\Nova\JobVerified;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class JobVerified extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\JobVerified::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id_job_verified';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            // ID::make('id_job_verified')->sortable(),
            Text::make('Job Id'),
            Text::make('account Name'),
            Select::make('Account Id')->options(Account::getAccounts()),
            // Text::make('Vms Id')->hideFromIndex(),
            Select::make('State')->options(getStates()),
            Text::make('Zip')->hideFromIndex(),
            Select::make('Rate Type')->options(getRateTypes())->hideFromIndex(),
            Select::make('Clinical Unit')->options(getClinicalUnits()),
            Select::make('Status')->options(getStatus())->hideFromIndex(),
            Select::make('Shift Category')->options(getShiftCategories())->hideFromIndex(),
            Text::make('Parent Account')->hideFromIndex(),
            Select::make('Assignment Duration')->options(getAssignmentDuration()),
            Text::make('Bullhornid Id')->hideFromIndex(),
            Select::make('Vms Name')->options(getVmsNames())->hideFromIndex(),
            Text::make('File Name')->hideFromIndex(),
            Date::make('Start Date'),
            Date::make('End Date'),
            HasMany::make('PayPackages'),
            HasMany::make('Submission'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];


    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
