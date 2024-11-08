<?php

namespace App\Orchid\Layouts\Room;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class RoomEditLayout extends Rows
{
    protected function fields(): iterable
    {
        return [
            Input::make('room.title')
                ->type('text')
                ->required()
                ->max(255)
                ->title(__('Название'))
                ->placeholder(__('Название')),

            Input::make('room.discount_percent')
                ->type('text')
                ->required()
                ->max(255)
                ->title(__('Скидка % (-n%)'))
                ->placeholder(__('Скидка % (-n%)')),

            Input::make('room.price')
                ->type('text')
                ->required()
                ->max(255)
                ->title(__('Цена'))
                ->placeholder(__('Цена')),

            Input::make('room.price_old')
                ->type('text')
                ->required()
                ->max(255)
                ->title(__('Старая цена (перечеркнутая)'))
                ->placeholder(__('Старая цена (перечеркнутая)')),

            TextArea::make('room.preview_description')
                ->title(__('Описание на странице номеров'))
                ->rows(5)
                ->placeholder(__('Описание на странице номеров')),

            TextArea::make('room.detail_description')
                ->title(__('Описание на детальной странице номера'))
                ->rows(6)
                ->placeholder(__('Описание на детальной странице номера')),

            Input::make('room.square')
                ->type('text')
                ->max(255)
                ->title(__('Площадь (от 20 м²)'))
                ->placeholder(__('Площадь')),

            Input::make('room.bed_size')
                ->type('text')
                ->max(255)
                ->title(__('Размер кровати (160*200 см)'))
                ->placeholder(__('Размер кровати')),

            Input::make('room.persons')
                ->type('text')
                ->max(255)
                ->title(__('Гости (до 2 человек)'))
                ->placeholder(__('Гости')),

            Upload::make('room.attachment')
                ->groups('previewImages')
                ->title(__('Изображения на главной'))
                ->placeholder(__('Изображения на главной')),

            Upload::make('room.attachment')
                ->groups('detailImages')
                ->title(__('Изображения на детальной странице номера'))
                ->placeholder(__('Изображения на детальной странице номера')),
        ];
    }
}
