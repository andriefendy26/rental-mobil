<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';

    public function Customer(): BelongsTo
    {
         return $this->BelongsTo(Customer::class);
    }
    public function Mobil(): HasOne
    {
         return $this->HasOne(Mobil::class);
    }
    public function Supir(): HasOne
    {
         return $this->HasOne(Supir::class);
    }
}
