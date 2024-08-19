<?php

namespace App\Orchid\Layouts\Property;

use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class PropertyEditLayout extends Rows
{
    protected function fields(): iterable
    {
        return [
            Input::make('property.name')
                ->type('text')
                ->required()
                ->title(__('Название события'))
                ->placeholder(__('Название события')),

            CheckBox::make('property.is_detail')
                ->title(__('Свойство детальной страницы'))
                ->sendTrueOrFalse()
                ->placeholder(__('Свойство детальной страницы'))
                ->help('Свойство детальной страницы')
        ];
    }
}
