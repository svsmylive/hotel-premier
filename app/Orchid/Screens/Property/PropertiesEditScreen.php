<?php

namespace App\Orchid\Screens\Property;

use App\Models\Property;
use App\Orchid\Layouts\Property\PropertyEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PropertiesEditScreen extends Screen
{
    /**
     * @var Property
     */
    public $property;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Property $property): iterable
    {
        return [
            'property' => $property
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->property->exists ? 'Редактирование свойства' : 'Создание свойства';
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
            Layout::block(PropertyEditLayout::class)
                ->title(__('Свойства'))
                ->description(__('Форма создания свойства'))
                ->vertical()
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->property->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(Property $property, Request $request): RedirectResponse
    {
        $data = $request->input('property');

        if (!$property->id) {
            Property::create($data);
        } else {
            $property->update($data);
        }


        Toast::info(__('Сохранено успешно'));

        return redirect()->route('platform.systems.properties');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Property $property): RedirectResponse
    {
        $property->delete();

        Toast::info(__('Удалено успешно'));

        return redirect()->route('platform.systems.properties');
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
                ->canSee($this->property->exists),
        ];
    }
}
