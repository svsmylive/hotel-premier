<?php

namespace App\Orchid\Screens\Room;

use App\Models\PropertyRoom;
use App\Models\Room;
use App\Orchid\Layouts\Room\RoomEditLayout;
use App\Orchid\Layouts\Room\RoomPropertiesDetailLayout;
use App\Orchid\Layouts\Room\RoomPropertiesPreviewLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class RoomsEditScreen extends Screen
{
    /**
     * @var Room
     */
    public $room;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Room $room): iterable
    {
        $room->load(['attachment', 'previewProperties', 'detailProperties']);

        return [
            'room' => $room
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->room->exists ? 'Редактирование комнаты' : 'Создание блюда';
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
        $layouts = [
            Layout::block(RoomEditLayout::class)
                ->title(__('Room'))
                ->description(__('Форма редактирования комнаты'))
                ->vertical()
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->room->exists)
                        ->method('save')
                ),
            Layout::block(new RoomPropertiesPreviewLayout($this->room))
                ->title(__('Выберете preview свойства из списка'))
                ->description(__('Выберете preview свойства из списка'))
                ->vertical()
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->room->exists)
                        ->method('save')
                ),
            Layout::block(new RoomPropertiesDetailLayout($this->room))
                ->title(__('Выберете свойства детальной страницы из списка'))
                ->description(__('Выберете свойства детальной страницы из списка'))
                ->vertical()
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->room->exists)
                        ->method('save')
                ),
        ];

        return $layouts;
    }

    public function save(Room $room, Request $request): RedirectResponse
    {
        $requestData = $request->input('room');
        $attachment = $requestData['attachment'] ?? null;
        $previewProperties = $request['previewProperties'] ?? [];
        $detailProperties = $request['detailProperties'] ?? [];
        $allProperties = array_merge($previewProperties, $detailProperties);

        $room->previewProperties()->sync($allProperties);

        if ($attachment) {
            $room->attachment()->sync($attachment);
        }

        $room->update(Arr::only($requestData, $room->getFillable()));

        Toast::info(__('Успешно!'));

        return redirect()->route('platform.systems.rooms');
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
//            Button::make(__('Удалить'))
//                ->icon('bs.trash3')
//                ->confirm(__('Подтверждение удаления'))
//                ->method('remove')
//                ->canSee($this->room->exists),
        ];
    }
}
