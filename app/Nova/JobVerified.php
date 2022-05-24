<?php

namespace App\Nova;

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
            ID::make('id_job_verified')->sortable(),
            Text::make('account_name'),
            Text::make('account_id'),
            Text::make('job_id'),

            Text::make('vms_id'),
            Select::make('state')->options(getStates()),
            Text::make('zip'),
            Select::make('rate_type')->options(getRateTypes()),

            Select::make('clinical_unit')->options(getClinicalUnits()),
            Select::make('status')->options(getStatus()),
            Select::make('shift_category')->options(getShiftCategories()),
            Text::make('parent_account'),

            Select::make('assignment_duration')->options(getAssignmentDuration()),
            Text::make('bullhornid'),
            Select::make('vms_name')->options(getVmsNames()),
            Text::make('filename'),

            Date::make('start_date'),
            Date::make('end_date'),
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
