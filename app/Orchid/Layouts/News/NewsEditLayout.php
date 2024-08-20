<?php

namespace App\Orchid\Layouts\News;

use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class NewsEditLayout extends Rows
{
    protected function fields(): iterable
    {
        return [
            Input::make('news.title')
                ->type('text')
                ->required()
                ->title(__('Заголовок'))
                ->placeholder(__('Заголовок')),

            Input::make('news.description')
                ->type('text')
                ->title(__('Описание'))
                ->placeholder(__('Описание')),

            Input::make('news.created_at')
                ->type('text')
                ->readonly()
                ->title(__('Дата создания'))
                ->placeholder(__('Заполниться при создании новости')),

            Upload::make('news.attachment')
                ->groups('newsImage')
                ->maxFiles(1)
                ->title(__('Изображения'))
                ->placeholder(__('Изображения')),
        ];
    }
}
