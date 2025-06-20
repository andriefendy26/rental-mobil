<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
        protected $table = 'supirs';

    public function transaksis()
{
    return $this->hasMany(Transaksi::class, 'supir_id'); // ✅ Benar, karena transaksi yang punya foreign key supir_id
}


}
