<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
    ];

    public function schedules(): HasMany
    {
        return $this->hasMany(LoanSchedules::class);
    }

    public function adminRole(): HasOne
    {
        return $this->hasOne(AdminRole::class);
    }
}
