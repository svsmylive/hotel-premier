<?php

namespace App\Orchid\Screens\Room;

use App\Models\Room;
use App\Orchid\Layouts\Room\RoomListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class RoomsListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'rooms' => Room::query()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Комнаты';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

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
            RoomListLayout::class
        ];
    }

    public function remove(Request $request): void
    {
        Room::findOrFail($request->get('id'))->delete();

        Toast::info(__('Комната было успешно удалена'));
    }
}
