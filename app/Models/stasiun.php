<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stasiun extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function trains()
    {
        return $this->belongsTo(trains::class);
    }
}
