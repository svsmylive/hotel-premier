<?php

namespace App\Orchid\Layouts\Room;

use App\Models\Room;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class RoomListLayout extends Table
{
    /**
     * @var string
     */
    protected $target = 'rooms';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     * @throws \ReflectionException
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', __('Название'))
                ->render(fn(Room $room) => new Persona($room->presenter())),

            TD::make('price', 'Цена'),

            TD::make('updated_at', __('Дата обновления'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Room $room) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Link::make(__('Редактировать'))
                            ->route('platform.systems.rooms.edit', $room->id)
                            ->icon('bs.pencil'),
//                        Button::make(__('Удалить'))
//                            ->icon('bs.trash3')
//                            ->confirm(__('Подтверждение удаления'))
//                            ->method('remove', [
//                                'id' => $room->id,
//                            ]),
                    ])),
        ];
    }
}
