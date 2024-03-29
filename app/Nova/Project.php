<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Project extends Resource
{
    public static $model = \App\Models\Project::class;

    public static $title = 'id';

    public static $search = [
        'id',
    ];

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('title')
                ->rules('required'),

            Text::make('subtitle')
                ->rules('required', 'string'),

            Text::make('website')
                ->rules('nullable', 'url'),

            Markdown::make('description'),

            Boolean::make('published')
                ->rules('boolean'),

            Images::make('Images', 'default')
                ->withResponsiveImages()
                ->rules('required', 'min:1'),
        ];
    }
}
