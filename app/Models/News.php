<?php

namespace App\Models;

use App\Orchid\Presenters\News\NewsPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class News extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'description',
    ];

    protected array $allowedSorts = [
        'title',
        'created_at',
    ];

    public function presenter(): NewsPresenter
    {
        return new NewsPresenter($this);
    }

    public function imagePreview(): MorphToMany
    {
        return $this->morphToMany(Attachment::class, 'attachmentable', 'attachmentable')->where(
            'group',
            'newsImage'
        )->orderBy('sort');
    }
}
