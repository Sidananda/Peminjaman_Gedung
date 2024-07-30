<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_name',
        'building_room',
        'floor_quantity',
        'building_capacity',
        'faculty',
        'prodi',
        'is_highlighted',
    ];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
