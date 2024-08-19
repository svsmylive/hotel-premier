<?php

namespace App\Orchid\Layouts\Property;

use App\Models\Property;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\Boolean;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PropertyListLayout extends Table
{
    /**
     * @var string
     */
    protected $target = 'properties';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', __('Название'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn(Property $property) => new Persona($property->presenter())),

            TD::make('is_detail', __('Свойство детальной страницы'))
                ->usingComponent(Boolean::class)
                ->sort(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Property $property) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Link::make(__('Редактировать'))
                            ->route('platform.systems.properties.edit', $property->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Удалить'))
                            ->icon('bs.trash3')
                            ->confirm(__('Подтверждение удаления'))
                            ->method('remove', [
                                'id' => $property->id,
                            ]),
                    ])),
        ];
    }
}
