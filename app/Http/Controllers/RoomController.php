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

            if ($previewImages) {
                foreach ($previewImages as $image) {
                    $images[] = [
                        'id' => $image->id,
                        'name' => $image->name,
                        'original_name' => $image->original_name,
                        'extension' => $image->extension,
                        'size' => $image->size,
                        'url' => '/storage/' . $image->path . $image->name . '.' . $image->extension,
                    ];
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

        if ($detailProperties) {
            foreach ($detailProperties as $property) {
                $propData[] = [
                    'id' => $property->id,
                    'name' => $property->name,
                ];
            }
        }

        if ($detailImages) {
            foreach ($detailImages as $image) {
                $images[] = [
                    'id' => $image->id,
                    'name' => $image->name,
                    'original_name' => $image->original_name,
                    'extension' => $image->extension,
                    'size' => $image->size,
                    'url' => '/storage/' . $image->path . $image->name . '.' . $image->extension,
                ];
            }
        }

        return [
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
}
