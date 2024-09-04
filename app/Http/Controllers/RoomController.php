<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomController
{
    public function index()
    {
        $rooms = Room::query()->with(['previewProperties', 'previewImages'])->get();
        $data = [];


        foreach ($rooms as $room) {
            $previewProperties = $room->previewProperties;
            $previewImages = $room->previewImages;
            $propData = [];
            $images = [];

            if ($previewProperties) {
                foreach ($previewProperties as $property) {
                    $propData[] = [
                        'id' => $property->id,
                        'name' => $property->name,
                    ];
                }
            }

            $i = 0;
            if ($previewImages) {
                foreach ($previewImages as $image) {
                    $images[] = [
                        'id' => $image->id,
                        'name' => $image->name,
                        'original_name' => $image->original_name,
                        'extension' => $image->extension,
                        'size' => $image->size,
                        'url' => '/storage/' . $image->path . $image->name . '.' . $image->extension,
                        'is_main' => $i == 0,
                    ];

                    $i++;
                }
            }

            $data[] = [
                'id' => $room->id,
                'name' => $room->title,
                'description' => $room->preview_description,
                'price' => $room->price,
                'price_old' => $room->price_old,
                'discount_percent' => $room->discount_percent,
                'options' => $propData,
                'images' => $images
            ];
        }

        return $data;
    }

    public function get(int $id)
    {
        $room = Room::findOrFail($id);

        $detailProperties = $room->detailProperties;
        $detailImages = $room->detailImages;
        $propData = [];
        $images = [];
        $moreCount = 0;

        if ($room->id == 1) {
            $meta_title = 'Номер категории Стандарт для двух человек - бизнес-отель «Премьер» в центре Краснодара';
            $meta_description = 'Номер категории Стандарт подходит для комфортабельного проживания двух человек. Бизнес-отель «Премьер» в самом центре Краснодара. Цены и бронирование на сайте. ';
        } elseif ($room->id == 2) {
            $meta_title = 'Номер категории улучшенный Стандарт - бизнес-отель «Премьер» в центре Краснодара';
            $meta_description = 'Номер категории улучшенный Стандарт подходит для комфортабельного проживания двух человек. Бизнес-отель «Премьер» в самом центре Краснодара. Цены и бронирование на сайте.';
        } elseif ($room->id == 3) {
            $meta_title = 'Номер категории премиум Стандарт - бизнес-отель «Премьер» в центре Краснодара';
            $meta_description = 'Номер категории премиум Стандарт подходит для комфортабельного проживания двух человек. Бизнес-отель «Премьер» в самом центре Краснодара. Цены и бронирование на сайте.';
        } elseif ($room->id == 4) {
            $meta_title = 'Номер студия в бизнес-отеле «Премьер» в центре Краснодара';
            $meta_description = 'Номер студия в бизнес-отеле «Премьер». Бизнес-отель «Премьер» в самом центре Краснодара. Стоимость и бронирование на сайте.';
        } else {
            $meta_title = 'НОМЕР КЛАССА ЛЮКС | Бизнес-отель «Премьер» - Краснодар';
            $meta_description = 'В отеле «Премьер» расположены 2 номера класса Люкс со всеми удобствами. Гостиничные номера Люкс в Краснодаре';
        }

        if ($detailProperties) {
            foreach ($detailProperties as $property) {
                $propData[] = [
                    'id' => $property->id,
                    'name' => $property->name,
                ];
            }
        }

        if ($detailImages) {
            $i = 0;
            $moreCount = count($detailImages) - 5;

            foreach ($detailImages as $image) {
                if ($i == 5) {
                    break;
                }

                $images[] = [
                    'id' => $image->id,
                    'name' => $image->name,
                    'original_name' => $image->original_name,
                    'extension' => $image->extension,
                    'size' => $image->size,
                    'url' => '/storage/' . $image->path . $image->name . '.' . $image->extension,
                ];

                $i++;
            }
        }

        return [
            'id' => $room->id,
            'name' => $room->title,
            'description' => $room->detail_description,
            'price' => $room->price,
            'price_old' => $room->price_old,
            'discount_percent' => $room->discount_percent,
            'square' => $room->square,
            'bed_size' => $room->bed_size,
            'capacity' => $room->persons,
            'options' => $propData,
            'images' => $images,
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'more_count' => $moreCount,
        ];
    }

    public function byId(int $id)
    {
        $room = Room::query()->find($id);

        if (!$room) {
            return route('rooms');
        }

        $data = $this->get($id);

        return view('room', compact('data'));
    }
}
