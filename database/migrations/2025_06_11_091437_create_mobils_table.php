<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->string('no_plat')->nullable();
            $table->string('gambar');
            $table->double('harga')->nullable();
            $table->enum('status', ['Jalan', 'Dipesan','Kosong']);
            $table->string('kapasitas')->nullable();
            $table->string('warna')->nullable();
            $table->string('bahan_bakar')->nullable();
            $table->enum('transmisi', ['Manual','Otomatis', 'CVT','DCT','AMT',])->nullable();
            //  $table->foreign('jenis_mobil_id')->references('id')->on('jenis_mobils');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
