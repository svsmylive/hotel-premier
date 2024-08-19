<?php

namespace App\Models;

use App\Orchid\Presenters\Property\PropertyPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

/**
 * @property string $name
 * @property bool $is_detail
 */
class Property extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'properties';

    protected $fillable = [
        'name',
        'is_detail'
    ];

    protected array $allowedFilters = [
        'name' => Like::class,
    ];

    protected array $allowedSorts = [
        'name',
        'is_detail',
    ];

    public function presenter(): PropertyPresenter
    {
        return new PropertyPresenter($this);
    }

    public function scopePreviewProperties(Builder $query): Builder
    {
        return $query->where('is_detail', false);
    }

    public function scopeDetailProperties(Builder $query): Builder
    {
        return $query->where('is_detail', true);
    }
}
