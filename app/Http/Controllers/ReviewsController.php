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
        $reviews = Reviews::query()
            ->where('passed_moderation', true)
            ->orderByDesc('stars')
            ->orderByDesc('created_at')
            ->get();

        return $reviews->map(function (Reviews $reviews) {
            return [
                'id' => $reviews->id,
                'date' => $reviews->created_at,
                'author' => $reviews->user_name,
                'text' => $reviews->description,
                'rating' => $reviews->stars,
            ];
        })->paginate(20);
    }

    public function store(Request $request): array
    {
        $data = $request->all();

        if (isset($data['passed_moderation'])) {
            unset($data['passed_moderation']);
        }

        $data = [
            'user_name' => $data['author'] ?? null,
            'description' => $data['text'] ?? null,
            'stars' => $data['rating'] ?? null,
        ];

        $fillable = (new Reviews())->getFillable();

        $reviews = Reviews::query()->create(Arr::only($data, $fillable));

        return [
            'id' => $reviews->id,
            'date' => $reviews->created_at,
            'author' => $reviews->user_name,
            'text' => $reviews->description,
            'rating' => $reviews->stars,
        ];
    }
}
