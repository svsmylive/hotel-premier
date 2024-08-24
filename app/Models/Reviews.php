<?php

namespace App\Models;

use App\Orchid\Presenters\Reviews\ReviewsPresenter;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Reviews extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'reviews';

    protected $fillable = [
        'user_name',
        'description',
        'stars',
        'passed_moderation',
    ];

    protected array $allowedSorts = [
        'passed_moderation',
        'stars',
        'user_name',
    ];

    public function presenter(): ReviewsPresenter
    {
        return new ReviewsPresenter($this);
    }
}
