<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BillMeter extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rooms(): BelongsTo
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }
    public function payments() : HasOne
    {
        return $this->hasOne(Payment::class,'bill_id', 'id');
    }



}
