<?php

namespace App\Orchid\Screens\Property;

use App\Models\Property;
use App\Orchid\Layouts\Property\PropertyListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PropertiesListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'properties' => Property::filters()->defaultSort('name')->paginate(50)
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Свойства номеров';
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
                ->route('platform.systems.properties.create'),
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
            PropertyListLayout::class
        ];
    }

    public function remove(Request $request): void
    {
        Property::findOrFail($request->get('id'))->delete();

        Toast::info(__('Свойство было успешно удалено'));
    }
}
