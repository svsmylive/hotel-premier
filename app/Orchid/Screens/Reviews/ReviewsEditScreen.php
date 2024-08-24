<?php

namespace App\Orchid\Screens\Reviews;

use App\Models\Reviews;
use App\Orchid\Layouts\Reviews\ReviewsEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ReviewsEditScreen extends Screen
{
    /**
     * @var Reviews
     */
    public $review;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Reviews $review): iterable
    {
        return [
            'review' => $review
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->review->exists ? 'Редактирование отзыва' : 'Создание отзыва';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return '';
    }

    public function layout(): iterable
    {
        return [
            Layout::block(ReviewsEditLayout::class)
                ->title(__('Отзыв'))
                ->description(__('Форма создания отзыва'))
                ->vertical()
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->review->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(Reviews $review, Request $request): RedirectResponse
    {
        $data = $request->input('review');

        if (!$review->id) {
            Reviews::create($data);
        } else {
            $review->update($data);
        }

        Toast::info(__('Сохранено успешно'));

        return redirect()->route('platform.systems.reviews');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Reviews $review): RedirectResponse
    {
        $review->delete();

        Toast::info(__('Удалено успешно'));

        return redirect()->route('platform.systems.reviews');
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Сохранить'))
                ->icon('bs.check-circle')
                ->method('save'),
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Подтверждение удаления'))
                ->method('remove')
                ->canSee($this->review->exists),
        ];
    }
}
