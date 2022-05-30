<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Account extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Account::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'account_name';

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
            ID::make('id')->sortable(),
            Text::make('Account Name'),
            Select::make('Type')->options(getParentAccount()),
            Text::make('Parent'),
            // Text::make('description'),
            Number::make('stipend_min'),
            Number::make('stipend_max'),
            Text::make('Account Manager'),
            Select::make('account_status')->options(getAccountStatus()),
            Select::make('Travel Experience Required')->options(getTravelExperience()),
            Select::make('Charting System')->options(getChartingExperience()),
            Select::make('Teaching Hospital')->options(getTeachingHospital()),
            Select::make('Trauma Level')->options(getTraumaLevel()),
            Select::make('Hospital Bed')->options(getHospitalBedSize()),
            Select::make('Magnate')->options(getMagnateRequired()),
            Select::make('BSN Required')->options(getBSNRequired()),
            text::make('Selling Point'),
            // Text::make('details'),
            // HasMany::make('JobVerifieds'),
            HasMany::make('PayPackages'),
            
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
