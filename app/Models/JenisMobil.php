<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisMobil extends Model
{
    use HasFactory;

    public function Mobil(): HasMany
    {
         return $this->HasMany(Mobil::class);
    }
}
