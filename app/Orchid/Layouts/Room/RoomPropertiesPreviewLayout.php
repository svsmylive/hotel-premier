<?php

namespace App\Orchid\Layouts\Room;

use App\Models\Property;
use App\Models\Room;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Rows;

class RoomPropertiesPreviewLayout extends Rows
{
    public function __construct(private readonly Room $room)
    {
    }

    protected function fields(): iterable
    {
        return [
            Relation::make('previewProperties.')
                ->fromModel(Property::class, 'name')
                ->applyScope('PreviewProperties')
                ->title('Выберете preview свойства из списка')
                ->value($this->room->previewProperties->pluck('id')->toArray())
                ->multiple(),
        ];
    }
}
