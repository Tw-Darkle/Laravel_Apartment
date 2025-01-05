<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function meters() : HasMany
    {
        return $this->hasMany(Meter::class);
    }

    public function bill_meters() : HasMany
    {
        return $this->hasMany(BillMeter::class,'room_id', 'id');
    }
}
