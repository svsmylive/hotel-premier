<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;

class ReviewsController
{
    public function index(): LengthAwarePaginator
    {
        return Reviews::query()
            ->where('passed_moderation', true)
            ->orderByDesc('stars')
            ->orderByDesc('created_at')
            ->paginate(20);
    }

    public function store(Request $request): Reviews
    {
        $data = $request->all();

        if (isset($data['passed_moderation'])) {
            unset($data['passed_moderation']);
        }

        $fillable = (new Reviews())->getFillable();

        return Reviews::query()->create(Arr::only($data, $fillable));
    }
}
