<?php

namespace App\Orchid\Presenters\Property;

use Laravel\Scout\Builder;
use Orchid\Screen\Contracts\Personable;
use Orchid\Screen\Contracts\Searchable;
use Orchid\Support\Presenter;

class PropertyPresenter extends Presenter implements Searchable, Personable
{
    public function perSearchShow(): int
    {
        return 5;
    }

    public function searchQuery(string $query = null): Builder
    {
        return $this->entity->search($query);
    }

    public function label(): string
    {
        return 'Свойства';
    }

    public function title(): string
    {
        return $this->entity->name;
    }

    public function subTitle(): string
    {
        return '';
    }

    public function url(): string
    {
        return route('platform.systems.properties.edit', $this->entity);
    }

    public function image(): ?string
    {
        return null;
    }
}
