<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsController
{
    public function index(): LengthAwarePaginator
    {
        return News::query()->orderByDesc('created_at')->paginate(20);
    }
}
