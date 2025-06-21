<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory;
     use SoftDeletes;

    protected $table = 'transaksi';

    public function Customer(): BelongsTo
    {
         return $this->BelongsTo(Customer::class);
    }
    public function Mobil(): belongsTo
    {
         return $this->belongsTo(Mobil::class , 'mobil_id');
    }
   public function Supir(): BelongsTo
{
    return $this->belongsTo(Supir::class, 'supir_id');
}

}
