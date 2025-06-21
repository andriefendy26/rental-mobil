<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobil extends Model
{
    use HasFactory;
    // protected $unguarded = [];
        // use SoftDeletes;

    public function JenisMobil(): BelongsTo
    {
         return $this->BelongsTo(jenisMobil::class);
    }
}
