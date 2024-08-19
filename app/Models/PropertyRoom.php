<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $property_id
 * @property int $room_id
 */
class PropertyRoom extends Model
{
    protected $table = 'property_room';

    protected $fillable = [
        'property_id',
        'room_id'
    ];
}
