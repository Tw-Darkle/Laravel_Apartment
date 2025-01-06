<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ManagerRenter extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rooms(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
