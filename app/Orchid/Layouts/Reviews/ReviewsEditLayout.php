<?php

namespace App\Orchid\Layouts\Reviews;

use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ReviewsEditLayout extends Rows
{
    protected function fields(): iterable
    {
        return [
            Input::make('review.user_name')
                ->type('text')
                ->title(__('Имя клиента'))
                ->placeholder(__('Имя клиента')),

            TextArea::make('review.description')
                ->rows(5)
                ->title(__('Описание'))
                ->placeholder(__('Описание')),

            Input::make('review.stars')
                ->type('number')
                ->title(__('Кол-во звезд'))
                ->placeholder(__('Кол-во звезд')),

            CheckBox::make('review.passed_moderation')
                ->title(__('Показывать на сайт'))
                ->sendTrueOrFalse()
                ->placeholder(__('Показывать на сайт')),

            Input::make('review.created_at')
                ->type('text')
                ->readonly()
                ->title(__('Дата создания'))
                ->placeholder(__('Заполниться при создании отзыва')),
        ];
    }
}
