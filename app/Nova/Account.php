<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\FormData;
use App\Models\Account as AccountModel;
use App\Nova\Actions\AccountManagerChange;
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
            Select::make('Type')->options(getAccounttype()),
            Select::make('Parent')->options([
            ])->dependsOn(
                ['type'],
                function (Select $field, NovaRequest $request, FormData $formData) {
                    if ($formData->type === 'A') {
                        $field->options(AccountModel::getRegionalAccount());
                    }elseif($formData->type === 'R') {
                        $field->options(AccountModel::getParentAccount());
                    }elseif($formData->type === 'P') {
                        $field->hide();
                    }
                }
            ),
            Number::make('Stipend Min')->min(1)->max(1000)->step(0.01)->hideFromIndex(),
            Number::make('Stipend Max')->min(1)->max(1000)->step(0.01)->hideFromIndex(),
            Select::make('Account Manager')->options(getAccountManager()),
            Select::make('Clinical Coordinator')->options(getClinicalCoordinator()),
            Select::make('Account Status')->options(getAccountStatus()),

            Select::make('Travel Experience')->options(getTravelExperience())->hideFromIndex(),
            Select::make('Charting System')->options(getChartingExperience()),
            Select::make('Teaching Hospital')->options(getTeachingHospital())->hideFromIndex(),
            Select::make('Trauma Level')->options(getTraumaLevel())->hideFromIndex(),

            Select::make('Number of Beds')->options(getHospitalBedSize())->hideFromIndex(),
            Select::make('Magnate')->options(getMagnateRequired())->hideFromIndex(),
            Select::make('BSN')->options(getBSNRequired())->hideFromIndex(),
            text::make('Selling Point')->hideFromIndex(),

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
         return [
            new Actions\AccountManagerChange
            

        ];
    }
}
