<?php

namespace App\Orchid\Screens\Reviews;

use App\Models\Reviews;
use App\Orchid\Layouts\Reviews\ReviewsListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ReviewsListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'reviews' => Reviews::filters()->defaultSort('created_at')->paginate(50)
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Страница о нас';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Добавить'))
                ->icon('bs.plus-circle')
                ->route('platform.systems.reviews.create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ReviewsListLayout::class
        ];
    }

    public function remove(Request $request): void
    {
        Reviews::findOrFail($request->get('id'))->delete();

        Toast::info(__('Отзыв был успешно удален'));
    }
}
