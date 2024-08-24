<?php

namespace App\Orchid\Layouts\Reviews;

use App\Models\Reviews;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\Boolean;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ReviewsListLayout extends Table
{
    /**
     * @var string
     */
    protected $target = 'reviews';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     * @throws \ReflectionException
     */
    protected function columns(): iterable
    {
        return [
            TD::make('passed_moderation', __('Показывать на сайт'))
                ->usingComponent(Boolean::class)
                ->align(TD::ALIGN_CENTER)
                ->sort(),

            TD::make('review_name', __('Отзыв №'))
                ->sort()
                ->cantHide()
                ->render(fn(Reviews $reviews) => new Persona($reviews->presenter())),

            TD::make('user_name', __('Имя клиента'))
                ->align(TD::ALIGN_CENTER)
                ->filter()
                ->sort(),

            TD::make('stars', __('Кол-во звезд'))
                ->align(TD::ALIGN_CENTER)
                ->sort(),

            TD::make('created_at', __('Дата создания'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT)
                ->sort(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Reviews $reviews) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Link::make(__('Редактировать'))
                            ->route('platform.systems.reviews.edit', $reviews->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Удалить'))
                            ->icon('bs.trash3')
                            ->confirm(__('Подтверждение удаления'))
                            ->method('remove', [
                                'id' => $reviews->id,
                            ]),
                    ])),
        ];
    }
}
