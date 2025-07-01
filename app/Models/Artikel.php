<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'id', 'judul', 'sub_judul', 'author',
        'gambar', 'tags', 'created_at', 'updated_at'
    ];

    public function User(): BelongsTo
    {
         return $this->BelongsTo(User::class);
    }
}
