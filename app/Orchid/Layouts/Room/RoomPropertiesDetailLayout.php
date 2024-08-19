<?php

namespace App\Orchid\Layouts\Room;

use App\Models\Property;
use App\Models\Room;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Rows;

class RoomPropertiesDetailLayout extends Rows
{
    public function __construct(private readonly Room $room)
    {
    }

    protected function fields(): iterable
    {
        return [
            Relation::make('detailProperties.')
                ->fromModel(Property::class, 'name')
                ->applyScope('DetailProperties')
                ->title('Выберете свойства детальной страницы из списка')
                ->value($this->room->detailProperties->pluck('id')->toArray())
                ->multiple(),
        ];
    }
}
