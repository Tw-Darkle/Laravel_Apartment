<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bill_meters(): BelongsTo
    {
        return $this->belongsTo(BillMeter::class,'bill_id','id');
    }
}
