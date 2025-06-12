<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'judul',
        'narasi',
        'gambar',
        'user_id',
    ];

    public function User(): BelongsTo
    {
         return $this->BelongsTo(User::class);
    }
}
