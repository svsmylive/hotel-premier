<?php

namespace App\Models;

use App\Orchid\Presenters\Room\RoomPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Room extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'rooms';

    protected $fillable = [
        'title',
        'price',
        'price_old',
        'preview_description',
        'detail_description',
        'discount_percent',
        'square',
        'bed_size',
        'persons',
    ];

    public function presenter(): RoomPresenter
    {
        return new RoomPresenter($this);
    }

    public function previewProperties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_room')->where('properties.is_detail', false);
    }

    public function detailProperties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_room')->where('properties.is_detail', true);
    }

    public function previewImages(): MorphToMany
    {
        return $this->morphToMany(Attachment::class, 'attachmentable', 'attachmentable')->where(
            'group',
            'previewImages'
        )->orderBy('sort');
    }

    public function detailImages(): MorphToMany
    {
        return $this->morphToMany(Attachment::class, 'attachmentable', 'attachmentable')->where(
            'group',
            'detailImages'
        )->orderBy('sort');
    }
}
